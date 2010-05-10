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
            [bBoxWest] => %s
            [currencyCode] => EUR
            [fipsCode] => GM
            [countryCode] => DE
            [isoNumeric] => 276
            [capital] => Berlino
            [areaInSqKm] => %s
            [languages] => de
            [bBoxEast] => %s
            [isoAlpha3] => DEU
            [continent] => EU
            [bBoxNorth] => %s
            [geonameId] => 2921044
            [bBoxSouth] => %s
            [population] => 82369000
        )

)
