--TEST--
Test for other code parts 03
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(
    substr(basename(__FILE__), 0, -4),
    'username',
    'auth_token'
);
try {
    $ret = $geo->countrySubdivision();
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}

?>
--EXPECTF--
missing lat/lng
