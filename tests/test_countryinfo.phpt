--TEST--
Test for Services_GeoNames::countryInfo() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->countryInfo(array(
        'lang'    => 'it',
        'country' => 'DE'
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
            [countryName] => Germania
            [bBoxWest] => 5.86563825607
            [currencyCode] => EUR
            [fipsCode] => GM
            [countryCode] => DE
            [isoNumeric] => 276
            [capital] => Berlino
            [areaInSqKm] => 357021.0
            [languages] => de
            [bBoxEast] => 15.0398902893
            [isoAlpha3] => DEU
            [continent] => EU
            [bBoxNorth] => 55.0556411743
            [geonameId] => 2921044
            [bBoxSouth] => 47.2757720947
            [population] => 82369000
        )

)
