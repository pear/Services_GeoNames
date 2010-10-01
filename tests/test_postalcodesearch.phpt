--TEST--
Test for Services_GeoNames::postalCodeSearch() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->postalCodeSearch(array(
        'postalcode' => 9011,
        'maxRows'    => 2
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
            [adminCode3] => 3203
            [adminName2] => Bezirk St. Gallen
            [adminName3] => St. Gallen
            [adminCode2] => 1701
            [adminCode1] => SG
            [postalCode] => 9011
            [countryCode] => CH
            [lng] => %s
            [placeName] => St. Gallen
            [lat] => %s
            [adminName1] => St. Gallen
        )

    [1] => stdClass Object
        (
            [adminCode1] => GS
            [postalCode] => 9011
            [countryCode] => HU
            [lng] => %s
            [placeName] => Győr
            [lat] => %s
            [adminName1] => Győr-Moson-Sopron
        )

)
