--TEST--
Test for Services_GeoNames::neighbourhood() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->neighbourhood(array(
        'lat'   => 40.78343,
        'lng'   => -73.96625,
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
    [adminName2] => New York County
    [adminCode2] => 061
    [adminCode1] => NY
    [countryName] => United States
    [name] => Central Park
    [countryCode] => US
    [city] => New York City-Manhattan
    [adminName1] => New York
)
