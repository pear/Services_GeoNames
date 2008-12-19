--TEST--
Test for other code parts 04
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

Services_GeoNames::$url = 'http://www.example.com/';
$geo = Services_GeoNames_factory(
    substr(basename(__FILE__), 0, -4),
    'username',
    'auth_token'
);
try {
    $ret = $geo->search(array('q' => 'kjhkjhkjh'));
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->response->getStatus() . ' ' . $exc->getMessage();
}

?>
--EXPECT--
404 Not Found
