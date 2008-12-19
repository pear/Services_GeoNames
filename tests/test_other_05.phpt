--TEST--
Test for other code parts 05
--FILE--
<?php
require_once 'Services/GeoNames.php';

Services_GeoNames::$url = 'blah blah...';
$geo = new Services_GeoNames();
try {
    $ret = $geo->search(array('q' => 'kjhkjhkjh'));
} catch (Services_GeoNames_HTTPException $exc) {
    echo $exc->getMessage() . "\n";
    echo get_class($exc->getCause());
}

?>
--EXPECT--
Absolute URL required
HTTP_Request2_Exception
