--TEST--
Test for Services_GeoNames::timezone() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->timezone(array(
        'lat' => 47.01,
        'lng' => 10.2
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
stdClass Object
(
    [time] => %s
    [countryName] => Austria
    [rawOffset] => 1
    [dstOffset] => 2
    [countryCode] => AT
    [gmtOffset] => 1
    [lng] => %s
    [timezoneId] => Europe/Vienna
    [lat] => %s
)
