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
--EXPECT--
Array
(
    [0] => stdClass Object
        (
            [postalCode] => 8775
            [countryCode] => CH
            [lng] => 9.0333333
            [placeName] => Luchsingen
            [lat] => 46.9666667
        )

    [1] => stdClass Object
        (
            [postalCode] => 8773
            [countryCode] => CH
            [lng] => 9.03666666
            [placeName] => Haslen GL
            [lat] => 46.96333334
        )

    [2] => stdClass Object
        (
            [postalCode] => 8773
            [countryCode] => CH
            [lng] => 9.03666666
            [placeName] => Haslen GL Fächer
            [lat] => 46.96333334
        )

    [3] => stdClass Object
        (
            [postalCode] => 8775
            [countryCode] => CH
            [lng] => 9.0333333
            [placeName] => Luchsingen-Hätzingen
            [lat] => 46.95833335
        )

    [4] => stdClass Object
        (
            [postalCode] => 8774
            [countryCode] => CH
            [lng] => 9.05
            [placeName] => Leuggelbach
            [lat] => 46.9666667
        )

)
