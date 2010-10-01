--TEST--
Test for Services_GeoNames::siblings() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->siblings(3017382);
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
            [countryName] => Albania
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => AL
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Albania
            [fcode] => PCLI
            [geonameId] => 783754
            [lat] => %s
            [population] => 3619000
            [adminName1] => 
        )

    [1] => stdClass Object
        (
            [countryName] => Andorra
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => AD
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Andorra
            [fcode] => PCLI
            [geonameId] => 3041565
            [lat] => %s
            [population] => 70549
            [adminName1] => 
        )

    [2] => stdClass Object
        (
            [countryName] => Austria
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => AT
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Austria
            [fcode] => PCLI
            [geonameId] => 2782113
            [lat] => %s
            [population] => 8205000
            [adminName1] => 
        )

    [3] => stdClass Object
        (
            [countryName] => Belarus
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => BY
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Belarus
            [fcode] => PCLI
            [geonameId] => 630336
            [lat] => %s
            [population] => 9685000
            [adminName1] => 
        )

    [4] => stdClass Object
        (
            [countryName] => Belgium
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => BE
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Belgium
            [fcode] => PCLI
            [geonameId] => 2802361
            [lat] => %s
            [population] => 10403000
            [adminName1] => 
        )

    [5] => stdClass Object
        (
            [countryName] => Bosnia and Herzegovina
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => BA
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Bosnia and Herzegovina
            [fcode] => PCLI
            [geonameId] => 3277605
            [lat] => %s
            [population] => 4025476
            [adminName1] => 
        )

    [6] => stdClass Object
        (
            [countryName] => Bulgaria
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => BG
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Bulgaria
            [fcode] => PCLI
            [geonameId] => 732800
            [lat] => %s
            [population] => 7262000
            [adminName1] => 
        )

    [7] => stdClass Object
        (
            [countryName] => Croatia
            [adminCode1] => 05
            [fclName] => country, state, region,...
            [countryCode] => HR
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Croatia
            [fcode] => PCLI
            [geonameId] => 3202326
            [lat] => %s
            [population] => 4495904
            [adminName1] => Karlovačka
        )

    [8] => stdClass Object
        (
            [countryName] => Cyprus
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => CY
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Cyprus
            [fcode] => PCLI
            [geonameId] => 146669
            [lat] => %s
            [population] => 792000
            [adminName1] => 
        )

    [9] => stdClass Object
        (
            [countryName] => Czech Republic
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => CZ
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Czechia
            [fcode] => PCLI
            [geonameId] => 3077311
            [lat] => %s
            [population] => 10220000
            [adminName1] => 
        )

    [10] => stdClass Object
        (
            [countryName] => Denmark
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => DK
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Denmark
            [fcode] => PCLI
            [geonameId] => 2623032
            [lat] => %s
            [population] => 5484000
            [adminName1] => 
        )

    [11] => stdClass Object
        (
            [countryName] => Estonia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => EE
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Estonia
            [fcode] => PCLI
            [geonameId] => 453733
            [lat] => %s
            [population] => 1307000
            [adminName1] => 
        )

    [12] => stdClass Object
        (
            [countryName] => Finland
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => FI
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Finland
            [fcode] => PCLI
            [geonameId] => 660013
            [lat] => %s
            [population] => 5244000
            [adminName1] => 
        )

    [13] => stdClass Object
        (
            [countryName] => Germany
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => DE
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Germany
            [fcode] => PCLI
            [geonameId] => 2921044
            [lat] => %s
            [population] => 82369000
            [adminName1] => 
        )

    [14] => stdClass Object
        (
            [countryName] => Gibraltar
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => GI
            [lng] => %s
            [fcodeName] => dependent political entity
            [fcl] => A
            [name] => Gibraltar
            [fcode] => PCLD
            [geonameId] => 2411586
            [lat] => %s
            [population] => 27884
            [adminName1] => 
        )

    [15] => stdClass Object
        (
            [countryName] => United Kingdom
            [adminCode1] => WLS
            [fclName] => country, state, region,...
            [countryCode] => GB
            [lng] => %s
            [fcodeName] => territory
            [fcl] => A
            [name] => Gower
            [fcode] => TERR
            [geonameId] => 6697760
            [lat] => %s
            [population] => 0
            [adminName1] => Wales
        )

    [16] => stdClass Object
        (
            [countryName] => Greece
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => GR
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Greece
            [fcode] => PCLI
            [geonameId] => 390903
            [lat] => %s
            [population] => 10722000
            [adminName1] => 
        )

    [17] => stdClass Object
        (
            [countryName] => Netherlands
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => NL
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Holland
            [fcode] => PCLI
            [geonameId] => 2750405
            [lat] => %s
            [population] => 16645000
            [adminName1] => 
        )

    [18] => stdClass Object
        (
            [countryName] => Vatican
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => VA
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Holy See
            [fcode] => PCLI
            [geonameId] => 3164670
            [lat] => %s
            [population] => 921
            [adminName1] => 
        )

    [19] => stdClass Object
        (
            [countryName] => Hungary
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => HU
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Hungary
            [fcode] => PCLI
            [geonameId] => 719819
            [lat] => %s
            [population] => 9930000
            [adminName1] => 
        )

    [20] => stdClass Object
        (
            [countryName] => Iceland
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => IS
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Iceland
            [fcode] => PCLI
            [geonameId] => 2629691
            [lat] => %s
            [population] => 304000
            [adminName1] => 
        )

    [21] => stdClass Object
        (
            [countryName] => Ireland
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => IE
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Ireland
            [fcode] => PCLI
            [geonameId] => 2963597
            [lat] => %s
            [population] => 4156000
            [adminName1] => 
        )

    [22] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Italy
            [fcode] => PCLI
            [geonameId] => 3175395
            [lat] => %s
            [population] => 58145000
            [adminName1] => 
        )

    [23] => stdClass Object
        (
            [countryName] => Serbia
            [adminCode1] => 01
            [fclName] => country, state, region,...
            [countryCode] => RS
            [lng] => %s
            [fcodeName] => semi-independent political entity
            [fcl] => A
            [name] => Kosovo
            [fcode] => PCLS
            [geonameId] => 831053
            [lat] => %s
            [population] => 2160510
            [adminName1] => RS.01
        )

    [24] => stdClass Object
        (
            [countryName] => Latvia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => LV
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Latvia
            [fcode] => PCLI
            [geonameId] => 458258
            [lat] => %s
            [population] => 2245000
            [adminName1] => 
        )

    [25] => stdClass Object
        (
            [countryName] => Liechtenstein
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => LI
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Liechtenstein
            [fcode] => PCLI
            [geonameId] => 3042058
            [lat] => %s
            [population] => 33717
            [adminName1] => 
        )

    [26] => stdClass Object
        (
            [countryName] => Lithuania
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => LT
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Lithuania
            [fcode] => PCLI
            [geonameId] => 597427
            [lat] => %s
            [population] => 3565000
            [adminName1] => 
        )

    [27] => stdClass Object
        (
            [countryName] => Luxembourg
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => LU
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Luxembourg
            [fcode] => PCLI
            [geonameId] => 2960313
            [lat] => %s
            [population] => 486000
            [adminName1] => 
        )

    [28] => stdClass Object
        (
            [countryName] => Macedonia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => MK
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Macedonia
            [fcode] => PCLI
            [geonameId] => 718075
            [lat] => %s
            [population] => 2045262
            [adminName1] => 
        )

    [29] => stdClass Object
        (
            [countryName] => Malta
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => MT
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Malta
            [fcode] => PCLI
            [geonameId] => 2562770
            [lat] => %s
            [population] => 403000
            [adminName1] => 
        )

    [30] => stdClass Object
        (
            [countryName] => Moldova
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => MD
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Moldova
            [fcode] => PCLI
            [geonameId] => 617790
            [lat] => %s
            [population] => 4455421
            [adminName1] => 
        )

    [31] => stdClass Object
        (
            [countryName] => Monaco
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => MC
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Monaco
            [fcode] => PCLI
            [geonameId] => 2993457
            [lat] => %s
            [population] => 32409
            [adminName1] => 
        )

    [32] => stdClass Object
        (
            [countryName] => Montenegro
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => ME
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Montenegro
            [fcode] => PCLI
            [geonameId] => 3194884
            [lat] => %s
            [population] => 678000
            [adminName1] => 
        )

    [33] => stdClass Object
        (
            [countryName] => Norway
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => NO
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Norway
            [fcode] => PCLI
            [geonameId] => 3144096
            [lat] => %s
            [population] => 4644000
            [adminName1] => 
        )

    [34] => stdClass Object
        (
            [fcodeName] => territory
            [countryName] => Greece
            [fcl] => A
            [fclName] => country, state, region,...
            [name] => Pilion
            [countryCode] => GR
            [lng] => %s
            [fcode] => TERR
            [geonameId] => 6692223
            [lat] => %s
            [adminName1] => 
            [population] => 0
        )

    [35] => stdClass Object
        (
            [countryName] => Poland
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => PL
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Poland
            [fcode] => PCLI
            [geonameId] => 798544
            [lat] => %s
            [population] => 38500000
            [adminName1] => 
        )

    [36] => stdClass Object
        (
            [countryName] => Portugal
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => PT
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Portugal
            [fcode] => PCLI
            [geonameId] => 2264397
            [lat] => %s
            [population] => 10676000
            [adminName1] => 
        )

    [37] => stdClass Object
        (
            [countryName] => Romania
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => RO
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Romania
            [fcode] => PCLI
            [geonameId] => 798549
            [lat] => %s
            [population] => 22246000
            [adminName1] => 
        )

    [38] => stdClass Object
        (
            [countryName] => Russia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => RU
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Russia
            [fcode] => PCLI
            [geonameId] => 2017370
            [lat] => %s
            [population] => 140702000
            [adminName1] => 
        )

    [39] => stdClass Object
        (
            [countryName] => San Marino
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => SM
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => San Marino
            [fcode] => PCLI
            [geonameId] => 3168068
            [lat] => %s
            [population] => 28880
            [adminName1] => 
        )

    [40] => stdClass Object
        (
            [countryName] => Serbia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => RS
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Serbia
            [fcode] => PCLI
            [geonameId] => 6290252
            [lat] => %s
            [population] => 9396411
            [adminName1] => 
        )

    [41] => stdClass Object
        (
            [countryName] => Slovakia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => SK
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Slovakia
            [fcode] => PCLI
            [geonameId] => 3057568
            [lat] => %s
            [population] => 5455000
            [adminName1] => 
        )

    [42] => stdClass Object
        (
            [countryName] => Slovenia
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => SI
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Slovenia
            [fcode] => PCLI
            [geonameId] => 3190538
            [lat] => %s
            [population] => 2007000
            [adminName1] => 
        )

    [43] => stdClass Object
        (
            [countryName] => Spain
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => ES
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Spain
            [fcode] => PCLI
            [geonameId] => 2510769
            [lat] => %s
            [population] => 40491000
            [adminName1] => 
        )

    [44] => stdClass Object
        (
            [countryName] => Svalbard and Jan Mayen
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => SJ
            [lng] => %s
            [fcodeName] => territory
            [fcl] => A
            [name] => Svalbard and Jan Mayen
            [fcode] => TERR
            [geonameId] => 607072
            [lat] => %s
            [population] => 2265
            [adminName1] => 
        )

    [45] => stdClass Object
        (
            [countryName] => Sweden
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => SE
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Sweden
            [fcode] => PCLI
            [geonameId] => 2661886
            [lat] => %s
            [population] => 9045000
            [adminName1] => 
        )

    [46] => stdClass Object
        (
            [countryName] => Switzerland
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => CH
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Switzerland
            [fcode] => PCLI
            [geonameId] => 2658434
            [lat] => %s
            [population] => 7581000
            [adminName1] => 
        )

    [47] => stdClass Object
        (
            [countryName] => Ukraine
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => UA
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Ukraine
            [fcode] => PCLI
            [geonameId] => 690791
            [lat] => %s
            [population] => 47425336
            [adminName1] => 
        )

    [48] => stdClass Object
        (
            [countryName] => United Kingdom
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => GB
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => United Kingdom
            [fcode] => PCLI
            [geonameId] => 2635167
            [lat] => %s
            [population] => 60943000
            [adminName1] => 
        )

)
