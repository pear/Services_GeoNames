--TEST--
Test for other code parts 06
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
$geo->url               = 'http://example.com/1';
$geo->failoverServers[] = 'http://example.com/2';
$geo->failoverServers[] = 'http://example.com/3';
$geo->failoverServers[] = 'http://ws.geonames.org';
$geo->failoverServers[] = 'http://ws5.geonames.org';

try {
    $ret = $geo->search(array('q' => 'paris'));
    var_dump(is_array($ret));
} catch (Services_GeoNames_HTTPException $exc) {
    echo $exc->getMessage() . "\n";
    echo get_class($exc->getCause());
}

?>
--EXPECTF--
bool(true)
