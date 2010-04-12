--TEST--
Test for Services_GeoNames::findNearestIntersection() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearestIntersection(array(
        'lat'   => 37.451,
        'lng'   => -122.18,
        'style' => 'full'
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
stdClass Object
(
    [adminName2] => San Mateo
    [street2] => Curtis St
    [postalcode] => 94025
    [street1] => Roble Ave
    [adminCode1] => CA
    [distance] => 0.09
    [countryCode] => US
    [lng] => %s
    [placename] => Menlo Park
    [lat] => %s
    [adminName1] => California
)
