--TEST--
Test for Services_GeoNames::postalCodeLookup() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->postalCodeLookup(array(
        'postalcode' => 31200,
        'country'    => 'FR',
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
            [postalcode] => 31200
            [adminCode1] => N
            [countryCode] => FR
            [lng] => %s
            [placeName] => Toulouse
            [lat] => %s
            [adminName1] => Midi-Pyrenees
        )

)
