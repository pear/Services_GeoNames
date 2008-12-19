--TEST--
Test for other code parts 02
--FILE--
<?php

require_once 'Services/GeoNames.php';
$geo = new Services_GeoNames();

try {
    $ret = $geo->unknownEndpoint();
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage() . "\n";
}

?>
--EXPECT--
Unknown service endpoint "unknownEndpoint"
