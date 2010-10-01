--TEST--
Test for Services_GeoNames::get() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->get(array(
        'geonameId' => 6295630,
        'style'     => 'full'
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
stdClass Object
(
    [alternateNames] => Array
        (
            [0] => stdClass Object
                (
                    [name] => Aarde
                    [lang] => nl
                )

            [1] => stdClass Object
                (
                    [name] => el món
                    [lang] => ca
                )

            [2] => stdClass Object
                (
                    [name] => el planeta
                    [lang] => es
                )

            [3] => stdClass Object
                (
                    [name] => Erde
                    [lang] => de
                )

            [4] => stdClass Object
                (
                    [name] => Föld
                    [lang] => hu
                )

            [5] => stdClass Object
                (
                    [name] => Globe
                    [lang] => en
                )

            [6] => stdClass Object
                (
                    [name] => Lurra
                    [lang] => eu
                )

            [7] => stdClass Object
                (
                    [name] => Maa
                    [lang] => fi
                )

            [8] => stdClass Object
                (
                    [name] => Mondo
                    [lang] => eo
                )

            [9] => stdClass Object
                (
                    [name] => Mundo
                    [lang] => es
                )

            [10] => stdClass Object
                (
                    [name] => Mundua
                    [lang] => eu
                )

            [11] => stdClass Object
                (
                    [name] => nuestro planeta
                    [lang] => es
                )

            [12] => stdClass Object
                (
                    [name] => Orbs
                    [lang] => la
                )

            [13] => stdClass Object
                (
                    [name] => Pamânt
                    [lang] => ro
                )

            [14] => stdClass Object
                (
                    [name] => Planeta Tierra
                    [lang] => es
                )

            [15] => stdClass Object
                (
                    [name] => Tero
                    [lang] => eo
                )

            [16] => stdClass Object
                (
                    [name] => Terra
                    [lang] => ca
                )

            [17] => stdClass Object
                (
                    [name] => Terra
                    [lang] => it
                )

            [18] => stdClass Object
                (
                    [name] => Terra
                    [lang] => la
                )

            [19] => stdClass Object
                (
                    [name] => Terre
                    [lang] => fr
                )

            [20] => stdClass Object
                (
                    [name] => Tierra
                    [lang] => es
                )

            [21] => stdClass Object
                (
                    [name] => Земля
                    [lang] => ru
                )

        )

    [countryName] => 
    [adminCode1] => 20
    [fclName] => parks,area, ...
    [lng] => %s
    [adminName2] => 
    [adminName3] => 
    [fcodeName] => 
    [adminName4] => 
    [timezone] => stdClass Object
        (
            [dstOffset] => 2
            [gmtOffset] => 1
            [timeZoneId] => Europe/Zurich
        )

    [fcl] => L
    [name] => Globe
    [fcode] => 
    [geonameId] => 6295630
    [lat] => %s
    [population] => 0
    [adminName1] => null.20
)
