--TEST--
Test for Services_GeoNames::findNearByWeather() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearByWeather(array(
        'lat'   => 42,
        'lng'   => -2,
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
%s
)
