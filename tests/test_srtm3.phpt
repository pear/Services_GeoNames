--TEST--
Test for Services_GeoNames::srtm3() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->srtm3(array(
        'lat' => 50.01,
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
    [srtm3] => 206
    [lng] => %s
    [lat] => %s
)
