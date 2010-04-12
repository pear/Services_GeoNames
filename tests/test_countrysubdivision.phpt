--TEST--
Test for Services_GeoNames::countrySubdivision() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->countrySubdivision(array(
        'lat' => 47.03,
        'lng' => 10.02
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
stdClass Object
(
    [distance] => 0
    [adminCode1] => 08
    [countryName] => Austria
    [countryCode] => AT
    [codes] => Array
        (
            [0] => stdClass Object
                (
                    [code] => 08
                    [type] => FIPS10-4
                )

            [1] => stdClass Object
                (
                    [code] => 8
                    [type] => ISO3166-2
                )

        )

    [adminName1] => Vorarlberg
)
