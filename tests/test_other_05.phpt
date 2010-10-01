--TEST--
Test for other code parts 05
--FILE--
<?php
require_once 'Services/GeoNames.php';

$geo = new Services_GeoNames();
$geo->url = 'Some invalid url...';
try {
    $ret = $geo->search(array('q' => 'kjhkjhkjh'));
} catch (Services_GeoNames_HTTPException $exc) {
    echo $exc->getMessage() . "\n";
    echo get_class($exc->getCause());
}

?>
--EXPECTF--
Absolute URL required
HTTP_Request2_Exception
