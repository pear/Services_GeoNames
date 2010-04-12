--TEST--
Test for Services_GeoNames::findNearbyPostalCodes() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearbyPostalCodes(array(
        'postalcode' => 8775,
        'country'    => 'CH',
        'radius'     => 10,
        'style'      =>'short'
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
            [postalCode] => 8775
            [countryCode] => CH
            [lng] => %s
            [placeName] => Luchsingen
            [lat] => %s
        )

    [1] => stdClass Object
        (
            [postalCode] => 8773
            [countryCode] => CH
            [lng] => %s
            [placeName] => Haslen GL
            [lat] => %s
        )

    [2] => stdClass Object
        (
            [postalCode] => 8773
            [countryCode] => CH
            [lng] => %s
            [placeName] => Haslen GL Fächer
            [lat] => %s
        )

    [3] => stdClass Object
        (
            [postalCode] => 8775
            [countryCode] => CH
            [lng] => %s
            [placeName] => Luchsingen-Hätzingen
            [lat] => %s
        )

    [4] => stdClass Object
        (
            [postalCode] => 8774
            [countryCode] => CH
            [lng] => %s
            [placeName] => Leuggelbach
            [lat] => %s
        )

)
