--TEST--
Test for Services_GeoNames::weather() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->weather(array(
        'north'   => 15,
        'south'   => -15,
        'east'    => -15,
        'west'    => 15,
        'maxRows' => 1,
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
Array
(
    [0] => stdClass Object
        (
            %s
        )

)
