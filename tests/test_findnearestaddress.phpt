--TEST--
Test for Services_GeoNames::findNearestAddress() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearestAddress(array(
        'lat'   => 37.451,
        'lng'   => -122.18,
        'style' => 'full',
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
    [adminCode2] => 081
    [postalcode] => 94025
    [adminCode1] => CA
    [distance] => 0.06
    [street] => Roble Ave
    [countryCode] => US
    [lng] => %s
    [streetNumber] => 675
    [placename] => Menlo Park
    [lat] => %s
    [adminName1] => California
)
