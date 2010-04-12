--TEST--
Test for other code parts 01
--FILE--
<?php

require_once 'Services/GeoNames.php';
require_once 'HTTP/Request2.php';

$geo = new Services_GeoNames();

try {
    print_r($geo->getSupportedEndPoints());
    $geo->setRequest(new HTTP_Request2());
    $geo->getRequest();
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage() . "\n";
}

?>
--EXPECTF--
Array
(
    [0] => children
    [1] => cities
    [2] => countryCode
    [3] => countryInfo
    [4] => countrySubdivision
    [5] => earthquakes
    [6] => findNearby
    [7] => findNearbyPlaceName
    [8] => findNearbyPostalCodes
    [9] => findNearbyStreets
    [10] => findNearByWeather
    [11] => findNearbyWikipedia
    [12] => findNearestAddress
    [13] => findNearestIntersection
    [14] => get
    [15] => gtopo30
    [16] => hierarchy
    [17] => neighbourhood
    [18] => neighbours
    [19] => postalCodeCountryInfo
    [20] => postalCodeLookup
    [21] => postalCodeSearch
    [22] => search
    [23] => siblings
    [24] => weather
    [25] => weatherIcao
    [26] => srtm3
    [27] => timezone
    [28] => wikipediaBoundingBox
    [29] => wikipediaSearch
)
