--TEST--
Test for Services_GeoNames::countryCode() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->countryCode(array(
        'lat' => 47.03,
        'lng' => 10.02
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
stdClass Object
(
    [distance] => 0
    [countryName] => Austria
    [countryCode] => AT
)
