--TEST--
Test for Services_GeoNames::hierarchy() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->hierarchy(array(
        'geonameId' => 2657896,
        'style'     => 'full'
    ));
    print_r($ret[0]);
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
                    [name] => Mondo
                    [lang] => eo
                )

            [1] => stdClass Object
                (
                    [name] => Aarde
                    [lang] => nl
                )

            [2] => stdClass Object
                (
                    [name] => Globe
                    [lang] => en
                )

            [3] => stdClass Object
                (
                    [name] => Orbs
                    [lang] => la
                )

            [4] => stdClass Object
                (
                    [name] => Земля
                    [lang] => ru
                )

            [5] => stdClass Object
                (
                    [name] => el món
                    [lang] => ca
                )

            [6] => stdClass Object
                (
                    [name] => Terra
                    [lang] => it
                )

            [7] => stdClass Object
                (
                    [name] => Pamânt
                    [lang] => ro
                )

            [8] => stdClass Object
                (
                    [name] => Terre
                    [lang] => fr
                )

            [9] => stdClass Object
                (
                    [name] => Föld
                    [lang] => hu
                )

            [10] => stdClass Object
                (
                    [name] => Lurra
                    [lang] => eu
                )

            [11] => stdClass Object
                (
                    [name] => Erde
                    [lang] => de
                )

            [12] => stdClass Object
                (
                    [name] => el planeta
                    [lang] => es
                )

            [13] => stdClass Object
                (
                    [name] => Maa
                    [lang] => fi
                )

        )

    [countryName] => 
    [fclName] => parks,area, ...
    [lng] => 0
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
    [lat] => 0
    [population] => 0
    [adminName1] => 
)
