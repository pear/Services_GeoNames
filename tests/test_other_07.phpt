--TEST--
Test for other code parts 06
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
$geo->url               = 'http://example.com/1';
$geo->failoverServers[] = 'http://example.com/2';
$geo->failoverServers[] = 'http://example.com/3';

try {
    $ret = $geo->search(array('q' => 'paris'));
} catch (Services_GeoNames_HTTPException $exc) {
    echo $exc->getMessage() . "\n";
    var_dump(count($exc->getCause()) == 3);
}

?>
--EXPECTF--
Not Found
bool(true)
