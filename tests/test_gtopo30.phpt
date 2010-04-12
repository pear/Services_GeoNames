--TEST--
Test for Services_GeoNames::gtopo30() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->gtopo30(array(
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
    [gtopo30] => 2632
    [lng] => %s
    [lat] => %s
)
