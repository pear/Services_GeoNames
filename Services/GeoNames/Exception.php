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
 * @link      http://www.geonames.org/export/webservice-exception.html
 * @since     File available since release 0.1.0
 * @filesource
 */

/**
 * Include the PEAR_Exception class.
 */
require_once 'PEAR/Exception.php';

/**
 * Base class for exceptions raised by the Services_GeoNames package.
 *
 * @category  Services
 * @package   Services_GeoNames
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2008 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/Services_GeoNames
 * @link      http://www.geonames.org/export/webservice-exception.html
 * @since     Class available since release 0.1.0
 */
class Services_GeoNames_Exception extends PEAR_Exception
{
}


/**
 * Class for HTTP exceptions raised by the Services_GeoNames package.
 *
 * @category  Services
 * @package   Services_GeoNames
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2008 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/Services_GeoNames
 * @link      http://www.geonames.org/export/webservice-exception.html
 * @since     Class available since release 0.1.0
 */
class Services_GeoNames_HTTPException extends Services_GeoNames_Exception
{
    // properties {{{

    /**
     * HTTP_Request2_Response instance.
     *
     * @var HTTP_Request2_Response $response
     */
    public $response;

    // }}}
    // __construct() {{{

    /**
     * Constructor.
     *
     * @param string                 $msg  The exception message
     * @param int|Exception          $p2   Exception code or cause
     * @param HTTP_Request2_Response $resp Optional request response
     *
     * @return void
     */
    public function __construct($msg, $p2 = null, $resp = null)
    {
        parent::__construct($msg, $p2);
        $this->response = $resp;
    }

    // }}}
}
