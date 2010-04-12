--TEST--
Test for Services_GeoNames::children() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    // note that the "type" xml should be ignored
    $ret = $geo->children(array('geonameId'=>'3175395', 'type'=>'xml'));
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
            [countryName] => Italy
            [adminCode1] => 01
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 4
            [name] => Abruzzo
            [fcode] => ADM1
            [geonameId] => 3183560
            [lat] => %s
            [population] => 0
            [adminName1] => Abruzzo
        )

    [1] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 19
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 1
            [name] => Aosta Valley
            [fcode] => ADM1
            [geonameId] => 3164857
            [lat] => %s
            [population] => 0
            [adminName1] => Aosta Valley
        )

    [2] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 13
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 5
            [name] => Apulia
            [fcode] => ADM1
            [geonameId] => 3169778
            [lat] => %s
            [population] => 4021957
            [adminName1] => Apulia
        )

    [3] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 02
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 2
            [name] => Basilicate
            [fcode] => ADM1
            [geonameId] => 3182306
            [lat] => %s
            [population] => 582337
            [adminName1] => Basilicate
        )

    [4] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 03
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 5
            [name] => Calabria
            [fcode] => ADM1
            [geonameId] => 2525468
            [lat] => %s
            [population] => 0
            [adminName1] => Calabria
        )

    [5] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 04
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 5
            [name] => Campania
            [fcode] => ADM1
            [geonameId] => 3181042
            [lat] => %s
            [population] => 5766975
            [adminName1] => Campania
        )

    [6] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 06
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 4
            [name] => Friuli
            [fcode] => ADM1
            [geonameId] => 3176525
            [lat] => %s
            [population] => 1188675
            [adminName1] => Friuli
        )

    [7] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 07
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 5
            [name] => Latium
            [fcode] => ADM1
            [geonameId] => 3174976
            [lat] => %s
            [population] => 5501631
            [adminName1] => Latium
        )

    [8] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 08
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 4
            [name] => Liguria
            [fcode] => ADM1
            [geonameId] => 3174725
            [lat] => %s
            [population] => 1557777
            [adminName1] => Liguria
        )

    [9] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 09
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 11
            [name] => Lombardy
            [fcode] => ADM1
            [geonameId] => 3174618
            [lat] => %s
            [population] => 9387203
            [adminName1] => Lombardy
        )

    [10] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 12
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 8
            [name] => Piedmont
            [fcode] => ADM1
            [geonameId] => 3170831
            [lat] => %s
            [population] => 4294081
            [adminName1] => Piedmont
        )

    [11] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 05
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 9
            [name] => Regione Emilia-Romagna
            [fcode] => ADM1
            [geonameId] => 3177401
            [lat] => %s
            [population] => 4115321
            [adminName1] => Emilia-Romagna
        )

    [12] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 11
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 2
            [name] => Regione Molise
            [fcode] => ADM1
            [geonameId] => 3173222
            [lat] => %s
            [population] => 324508
            [adminName1] => Molise
        )

    [13] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 14
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 8
            [name] => Sardinia
            [fcode] => ADM1
            [geonameId] => 2523228
            [lat] => %s
            [population] => 0
            [adminName1] => Sardinia
        )

    [14] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 15
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 9
            [name] => Sicily
            [fcode] => ADM1
            [geonameId] => 2523119
            [lat] => %s
            [population] => 5135871
            [adminName1] => Sicily
        )

    [15] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 10
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 4
            [name] => The Marches
            [fcode] => ADM1
            [geonameId] => 3174004
            [lat] => %s
            [population] => 1501401
            [adminName1] => The Marches
        )

    [16] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 17
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 2
            [name] => Trentino-Alto Adige
            [fcode] => ADM1
            [geonameId] => 3165244
            [lat] => %s
            [population] => 961848
            [adminName1] => Trentino-Alto Adige
        )

    [17] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 16
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 10
            [name] => Tuscany
            [fcode] => ADM1
            [geonameId] => 3165361
            [lat] => %s
            [population] => 3573454
            [adminName1] => Tuscany
        )

    [18] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 18
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 2
            [name] => Umbria
            [fcode] => ADM1
            [geonameId] => 3165048
            [lat] => %s
            [population] => 864496
            [adminName1] => Umbria
        )

    [19] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 20
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => first-order administrative division
            [fcl] => A
            [numberOfChildren] => 7
            [name] => Veneto
            [fcode] => ADM1
            [geonameId] => 3164604
            [lat] => %s
            [population] => 4697774
            [adminName1] => Veneto
        )

)
