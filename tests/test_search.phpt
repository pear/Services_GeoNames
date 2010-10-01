--TEST--
Test for Services_GeoNames::search() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->search(array(
        'q'       => 'london',
        'maxRows' => 2,
        'lang'    => 'fr'
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
            [countryName] => Royaume-Uni
            [adminCode1] => ENG
            [fclName] => city, village,...
            [countryCode] => GB
            [lng] => %s
            [fcodeName] => capital of a political entity
            [fcl] => P
            [name] => Londres
            [fcode] => PPLC
            [geonameId] => 2643743
            [lat] => %s
            [population] => 7421209
            [adminName1] => Angleterre
        )

    [1] => stdClass Object
        (
            [countryName] => Canada
            [adminCode1] => 08
            [fclName] => city, village,...
            [countryCode] => CA
            [lng] => %s
            [fcodeName] => populated place
            [fcl] => P
            [name] => London
            [fcode] => PPL
            [geonameId] => 6058560
            [lat] => %s
            [population] => 352395
            [adminName1] => Ontario
        )

)
