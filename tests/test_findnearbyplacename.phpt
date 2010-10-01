--TEST--
Test for Services_GeoNames::findNearbyPlaceName() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearbyPlaceName(array(
        'lat'   => 47.3,
        'lng'   => 9,
        'style' => 'full'
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
            [countryName] => Switzerland
            [adminCode1] => SG
            [fclName] => city, village,...
            [elevation] => 0
            [countryCode] => CH
            [lng] => %s
            [adminName2] => 
            [adminName3] => 
            [fcodeName] => populated place
            [distance] => 1.6276
            [adminName4] => 
            [timezone] => stdClass Object
                (
                    [dstOffset] => 2
                    [gmtOffset] => 1
                    [timeZoneId] => Europe/Zurich
                )

            [fcl] => P
            [name] => Atzmännig
            [fcode] => PPL
            [geonameId] => 6559633
            [lat] => %s
            [population] => 0
            [adminName1] => Kanton St. Gallen
        )

)
