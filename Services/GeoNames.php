<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR Services_GeoNames package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Services
 * @package   Services_GeoNames
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2008 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   SVN: $Id$
 * @link      http://pear.php.net/package/Services_GeoNames
 * @link      http://www.geonames.org/export/web-services.html
 * @since     File available since release 0.1.0
 * @filesource
 */

/**
 * Dependencies.
 */
require_once 'Services/GeoNames/Exception.php';
require_once 'HTTP/Request2.php';
 
/**
 * Main interface to the GeoNames API:
 * {@link http://www.geonames.org/export/web-services.html}
 *
 * @category  Services
 * @package   Services_GeoNames
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2008 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/Services_GeoNames
 * @link      http://www.geonames.org/export/web-services.html
 * @link      http://www.geonames.org/export/ws-overview.html
 * @since     Class available since release 0.1.0
 *
 * @method array    children()                children(array $params)
 * @method array    cities()                  cities(array $params)
 * @method stdclass countryCode()             countryCode(array $params)
 * @method array    countryInfo()             countryInfo(array $params)
 * @method stdclass countrySubdivision()      countrySubdivision(array $params)
 * @method array    earthquakes()             earthquakes(array $params)
 * @method array    findNearby()              findNearby(array $params)
 * @method array    findNearbyPlaceName()     findNearbyPlaceName(array $params)
 * @method array    findNearbyPostalCodes()   findNearbyPostalCodes(array $params)
 * @method array    findNearbyStreets()       findNearbyStreets(array $params)
 * @method stdclass findNearByWeather()       findNearByWeather(array $params)
 * @method array    findNearbyWikipedia()     findNearbyWikipedia(array $params)
 * @method stdclass findNearestAddress()      findNearestAddress(array $params)
 * @method stdclass findNearestIntersection() findNearestIntersection(array $params)
 * @method stdclass get()                     get(array $params)
 * @method stdclass gtopo30()                 gtopo30(array $params)
 * @method array    hierarchy()               hierarchy(array $params)
 * @method stdclass neighbourhood()           neighbourhood(array $params)
 * @method array    neighbours()              neighbours(array $params)
 * @method array    postalCodeCountryInfo()   postalCodeCountryInfo(array $params)
 * @method array    postalCodeLookup()        postalCodeLookup(array $params)
 * @method array    postalCodeSearch()        postalCodeSearch(array $params)
 * @method array    search()                  search(array $params)
 * @method array    siblings()                siblings(array $params)
 * @method array    weather()                 weather(array $params)
 * @method stdclass weatherIcao()             weatherIcao(array $params)
 * @method stdclass srtm3()                   srtm3(array $params)
 * @method stdclass timezone()                timezone(array $params)
 * @method array    wikipediaBoundingBox()    wikipediaBoundingBox(array $params)
 * @method array    wikipediaSearch()         wikipediaSearch(array $params)
 */
class Services_GeoNames
{
    // constants {{{

    /**
     * Exception code constant defined by this package.
     */
    const UNSUPPORTED_ENDPOINT = 1;
     
    /**#@+
     * Exception codes constants from:
     * {@link http://www.geonames.org/export/webservice-exception.html}
     */
    const AUTHORIZATION_EXCEPTION          = 10;
    const RECORD_DOES_NOT_EXIST            = 11;
    const OTHER_ERROR                      = 12;
    const DATABASE_TIMEOUT                 = 13;
    const INVALID_PARAMETER                = 14;
    const NO_RESULT_FOUND                  = 15;
    const DUPLICATE_EXCEPTION              = 16;
    const POSTAL_CODE_NOT_FOUND            = 17;
    const DAILY_LIMIT_OF_CREDITS_EXCEEDED  = 18;
    const HOURLY_LIMIT_OF_CREDITS_EXCEEDED = 19;
    const WEEKLY_LIMIT_OF_CREDITS_EXCEEDED = 20;
    /**#@-*/
    
    // }}}
    // properties {{{

    /**
     * Url of the GeoNames web service.
     * This should not change but anyway we make it public.
     *
     * @var string $url
     */
    public static $url = 'http://ws.geonames.org';

    /**
     * The HTTP_Request2 instance, you can customize the request if you want to 
     * (proxy, auth etc...) with the get/setRequest() methods.
     *
     * @var HTTP_Request2 $request
     */
    protected $request;

    /**
     * Auth username, for commercial webservices only.
     *
     * @var string $username
     */
    protected $username;

    /**
     * Auth token, for commercial webservices only.
     *
     * @var string $token
     */
    protected $token;

    /**
     * Array of supported endpoints (listed alphabetically) and their 
     * corresponding root property (if any).
     * 
     * Note that we only support json endpoints, so the following endpoints are
     * not supported:
     * - extendedFindNearby (JSON not available for now)
     * - rssToGeo (RSS/KML only)
     *
     * For a full documentation of the available endpoints services, please 
     * see: {@link http://www.geonames.org/export/ws-overview.html}.
     *
     * @var array $endpoints
     */
    protected $endpoints = array(
        'children'                => 'geonames',
        'cities'                  => 'geonames',
        'countryCode'             => false,
        'countryInfo'             => 'geonames',
        'countrySubdivision'      => false,
        'earthquakes'             => 'earthquakes',
        'findNearby'              => 'geonames',
        'findNearbyPlaceName'     => 'geonames',
        'findNearbyPostalCodes'   => 'postalCodes',
        'findNearbyStreets'       => 'streetSegment',
        'findNearByWeather'       => 'weatherObservation',
        'findNearbyWikipedia'     => 'geonames',
        'findNearestAddress'      => 'address',
        'findNearestIntersection' => 'intersection',
        'get'                     => false,
        'gtopo30'                 => false,
        'hierarchy'               => 'geonames',
        'neighbourhood'           => 'neighbourhood',
        'neighbours'              => 'geonames',
        'postalCodeCountryInfo'   => 'geonames',
        'postalCodeLookup'        => 'postalcodes', // not a typo
        'postalCodeSearch'        => 'postalCodes',
        'search'                  => 'geonames',
        'siblings'                => 'geonames',
        'weather'                 => 'weatherObservations',
        'weatherIcao'             => 'weatherObservation',
        'srtm3'                   => false,
        'timezone'                => false,
        'wikipediaBoundingBox'    => 'geonames',
        'wikipediaSearch'         => 'geonames',
    );

    // }}}
    // __construct() {{{
    
    /**
     * Constructor, if you're using a commercial account (optional), you must 
     * pass your "username" and "token".
     * 
     * @param string $username Username for commercial webservice (optional)
     * @param string $token    Token for commercial webservice (optional)
     * 
     * @return void
     * @access public
     */
    public function __construct($username = null, $token = null)
    {
        if ($username !== null) {
            $this->username = $username;
        }
        if ($token !== null) {
            $this->token = $token;
        }
    }
    
    // }}}
    // __call() {{{
    
    /**
     * Method interceptor that retrieves the corresponding endpoint and return
     * a json decoded object or throw a Services_GeoNames_Exception.
     * 
     * @param string $endpoint The endpoint to call
     * @param array  $params   Array of parameters to pass to the endpoint
     * 
     * @return mixed stdclass|array The JSON decoded response or an array
     * @throws Services_GeoNames_Exception When an invalid method is called or 
     *                                     when the websercices returns an error
     */
    public function __call($endpoint, $params = array())
    {
        // check that endpoint is supported
        if (!in_array($endpoint, array_keys($this->endpoints))) {
            throw new Services_GeoNames_Exception(
                'Unknown service endpoint "' . $endpoint . '"',
                self::UNSUPPORTED_ENDPOINT
            );
        }

        // handle params
        if (isset($params[0])) {
            $params = is_array($params[0]) 
                ? $params[0] 
                : array('geonameId' => $params[0]);
        } else {
            $params = array();
        }
        if (isset($params['type'])) {
            // we only do json
            unset($params['type']);
        }
        if ($this->username !== null) {
            $params['username'] = $this->username;
        }
        if ($this->token !== null) {
            $params['token'] = $this->token;
        }

        // build the url and retrieve the result
        $qString = $this->formatQueryString($params);
        $url     = self::$url . '/' . $endpoint . 'JSON?' . $qString;
        $ret     = json_decode($this->sendRequest($url));

        // check if we have a error response
        if (isset($ret->status->message) && isset($ret->status->value)) {
            throw new Services_GeoNames_Exception(
                $ret->status->message,
                (int)$ret->status->value
            );
        }
        
        // remove useless root property, to make the result more user friendly
        if ($this->endpoints[$endpoint] !== false) {
            $prop = $this->endpoints[$endpoint];
            $ret  = $ret->$prop;
        }
        return $ret;
    }
    
    // }}}
    // sendRequest() {{{
    
    /**
     * Sends the request to the server using HTTP_Request2. 
     * 
     * @param string $url The full service url (url + endpoint + query string)
     * 
     * @return string The response body
     * @throws HTTP_Request2_Exception
     * @throws Services_GeoNames_HTTPException When something goes wrong when 
     *                                         building the request or 
     *                                         requesting the server.
     */
    protected function sendRequest($url)
    {
        try {
            $request = $this->getRequest();
            $request->setUrl($url);
            $response = $request->send();
        } catch (HTTP_Request2_Exception $exc) {
            throw new Services_GeoNames_HTTPException(
                $exc->getMessage(),
                $exc // the original exception cause
            );
        }
        if ($response->getStatus() != 200) {
            throw new Services_GeoNames_HTTPException(
                $response->getReasonPhrase(),
                $response->getStatus(),
                $response
            );
        }
        return $response->getBody();
    }
    
    // }}}
    // formatQueryString() {{{
    
    /**
     * Builds a valid query string (url and utf8 encoded) to pass to the 
     * endpoint and returns it.
     * 
     * @param array $params Array of arguments
     * 
     * @return string The formatted query string
     */
    protected function formatQueryString($params = array())
    {
        $qString = array();
        foreach ($params as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $val) {
                    $qString[] = $name . '=' . urlencode(utf8_encode($val));
                }
            } else {
                $qString[] = $name . '=' . urlencode(utf8_encode($value));
            }
        }
        return implode('&', $qString);
    }
    
    // }}}
    // getRequest() {{{
    
    /**
     * Returns the HTTP_Request2 instance.
     * 
     * @return HTTP_Request2 The request
     */
    public function getRequest()
    {
        if (!$this->request instanceof HTTP_Request2) {
            $this->request = new HTTP_Request2();
        }
        return $this->request;
    }
    
    // }}}
    // setRequest() {{{
    
    /**
     * Sets the HTTP_Request2 instance.
     * 
     * @param HTTP_Request2 $request The request to set
     *
     * @return void
     */
    public function setRequest(HTTP_Request2 $request)
    {
        $this->request = $request;
    }
    
    // }}}
    // getSupportedEndpoints() {{{
    
    /**
     * Returns an array of supported services endpoints.
     * 
     * @return array The endpoints array
     */
    public function getSupportedEndpoints()
    {
        return array_keys($this->endpoints);
    }
    
    // }}}
}