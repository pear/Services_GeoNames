--TEST--
Test for Services_GeoNames::postalCodeCountryInfo() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->postalCodeCountryInfo();
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
            [countryName] => Andorra
            [numPostalCodes] => 7
            [countryCode] => AD
            [maxPostalCode] => AD700
            [minPostalCode] => AD100
        )

    [1] => stdClass Object
        (
            [countryName] => Argentina
            [numPostalCodes] => 20260
            [countryCode] => AR
            [maxPostalCode] => 9431
            [minPostalCode] => 1601
        )

    [2] => stdClass Object
        (
            [countryName] => American Samoa
            [numPostalCodes] => 1
            [countryCode] => AS
            [maxPostalCode] => 96799
            [minPostalCode] => 96799
        )

    [3] => stdClass Object
        (
            [countryName] => Austria
            [numPostalCodes] => 46375
            [countryCode] => AT
            [maxPostalCode] => 9991
            [minPostalCode] => 1010
        )

    [4] => stdClass Object
        (
            [countryName] => Australia
            [numPostalCodes] => 10161
            [countryCode] => AU
            [maxPostalCode] => 9726
            [minPostalCode] => 0200
        )

    [5] => stdClass Object
        (
            [countryName] => Bangladesh
            [numPostalCodes] => 1323
            [countryCode] => BD
            [maxPostalCode] => 9461
            [minPostalCode] => 1000
        )

    [6] => stdClass Object
        (
            [countryName] => Belgium
            [numPostalCodes] => 3804
            [countryCode] => BE
            [maxPostalCode] => 9992
            [minPostalCode] => 1000
        )

    [7] => stdClass Object
        (
            [countryName] => Bulgaria
            [numPostalCodes] => 5304
            [countryCode] => BG
            [maxPostalCode] => 9974
            [minPostalCode] => 1000
        )

    [8] => stdClass Object
        (
            [countryName] => Brazil
            [numPostalCodes] => 5526
            [countryCode] => BR
            [maxPostalCode] => 99990-000
            [minPostalCode] => 01000-000
        )

    [9] => stdClass Object
        (
            [countryName] => Canada
            [numPostalCodes] => 1619
            [countryCode] => CA
            [maxPostalCode] => Y1A
            [minPostalCode] => A0A
        )

    [10] => stdClass Object
        (
            [countryName] => Switzerland
            [numPostalCodes] => 5225
            [countryCode] => CH
            [maxPostalCode] => 9658
            [minPostalCode] => 1000
        )

    [11] => stdClass Object
        (
            [countryName] => Czech Republic
            [numPostalCodes] => 15507
            [countryCode] => CZ
            [maxPostalCode] => 798 62
            [minPostalCode] => 100 00
        )

    [12] => stdClass Object
        (
            [countryName] => Germany
            [numPostalCodes] => 16376
            [countryCode] => DE
            [maxPostalCode] => 99998
            [minPostalCode] => 01067
        )

    [13] => stdClass Object
        (
            [countryName] => Denmark
            [numPostalCodes] => 1177
            [countryCode] => DK
            [maxPostalCode] => 9990
            [minPostalCode] => 0800
        )

    [14] => stdClass Object
        (
            [countryName] => Spain
            [numPostalCodes] => 56542
            [countryCode] => ES
            [maxPostalCode] => 52080
            [minPostalCode] => 01001
        )

    [15] => stdClass Object
        (
            [countryName] => Finland
            [numPostalCodes] => 4638
            [countryCode] => FI
            [maxPostalCode] => 99999
            [minPostalCode] => 00002
        )

    [16] => stdClass Object
        (
            [countryName] => Faroe Islands
            [numPostalCodes] => 119
            [countryCode] => FO
            [maxPostalCode] => 970
            [minPostalCode] => 100
        )

    [17] => stdClass Object
        (
            [countryName] => France
            [numPostalCodes] => 39072
            [countryCode] => FR
            [maxPostalCode] => 98000
            [minPostalCode] => 01000
        )

    [18] => stdClass Object
        (
            [countryName] => United Kingdom
            [numPostalCodes] => 27586
            [countryCode] => GB
            [maxPostalCode] => ZE3
            [minPostalCode] => AB1
        )

    [19] => stdClass Object
        (
            [countryName] => Guernsey
            [numPostalCodes] => 8
            [countryCode] => GG
            [maxPostalCode] => GY9
            [minPostalCode] => GY1
        )

    [20] => stdClass Object
        (
            [countryName] => Greenland
            [numPostalCodes] => 29
            [countryCode] => GL
            [maxPostalCode] => 3985
            [minPostalCode] => 3900
        )

    [21] => stdClass Object
        (
            [countryName] => Guadeloupe
            [numPostalCodes] => 19
            [countryCode] => GP
            [maxPostalCode] => 97180
            [minPostalCode] => 97100
        )

    [22] => stdClass Object
        (
            [countryName] => Greece
            [numPostalCodes] => 865
            [countryCode] => GR
            [maxPostalCode] => 859 00
            [minPostalCode] => 104 31
        )

    [23] => stdClass Object
        (
            [countryName] => Guam
            [numPostalCodes] => 23
            [countryCode] => GU
            [maxPostalCode] => 96932
            [minPostalCode] => 96910
        )

    [24] => stdClass Object
        (
            [countryName] => Guyana
            [numPostalCodes] => 9
            [countryCode] => GY
            [maxPostalCode] => 97360
            [minPostalCode] => 97312
        )

    [25] => stdClass Object
        (
            [countryName] => Croatia
            [numPostalCodes] => 6943
            [countryCode] => HR
            [maxPostalCode] => 53296
            [minPostalCode] => 10000
        )

    [26] => stdClass Object
        (
            [countryName] => Hungary
            [numPostalCodes] => 4041
            [countryCode] => HU
            [maxPostalCode] => 9985
            [minPostalCode] => 1011
        )

    [27] => stdClass Object
        (
            [countryName] => Isle of Man
            [numPostalCodes] => 86
            [countryCode] => IM
            [maxPostalCode] => IM9
            [minPostalCode] => IM1
        )

    [28] => stdClass Object
        (
            [countryName] => India
            [numPostalCodes] => 14777
            [countryCode] => IN
            [maxPostalCode] => 855126
            [minPostalCode] => 110001
        )

    [29] => stdClass Object
        (
            [countryName] => Iceland
            [numPostalCodes] => 148
            [countryCode] => IS
            [maxPostalCode] => 902
            [minPostalCode] => 101
        )

    [30] => stdClass Object
        (
            [countryName] => Italy
            [numPostalCodes] => 20894
            [countryCode] => IT
            [maxPostalCode] => 98168
            [minPostalCode] => 00010
        )

    [31] => stdClass Object
        (
            [countryName] => Jersey
            [numPostalCodes] => 4
            [countryCode] => JE
            [maxPostalCode] => JE3
            [minPostalCode] => JE1
        )

    [32] => stdClass Object
        (
            [countryName] => Japan
            [numPostalCodes] => 94388
            [countryCode] => JP
            [maxPostalCode] => 9998531
            [minPostalCode] => 1000001
        )

    [33] => stdClass Object
        (
            [countryName] => Liechtenstein
            [numPostalCodes] => 14
            [countryCode] => LI
            [maxPostalCode] => 9498
            [minPostalCode] => 9485
        )

    [34] => stdClass Object
        (
            [countryName] => Sri Lanka
            [numPostalCodes] => 1832
            [countryCode] => LK
            [maxPostalCode] => 96167
            [minPostalCode] =>  *
        )

    [35] => stdClass Object
        (
            [countryName] => Luxembourg
            [numPostalCodes] => 4334
            [countryCode] => LU
            [maxPostalCode] => L-9999
            [minPostalCode] => L-1009
        )

    [36] => stdClass Object
        (
            [countryName] => Monaco
            [numPostalCodes] => 29
            [countryCode] => MC
            [maxPostalCode] => 98000
            [minPostalCode] => 98000
        )

    [37] => stdClass Object
        (
            [countryName] => Moldova
            [numPostalCodes] => 1753
            [countryCode] => MD
            [maxPostalCode] => MD-7731
            [minPostalCode] => MD-2000
        )

    [38] => stdClass Object
        (
            [countryName] => Marshall Islands
            [numPostalCodes] => 2
            [countryCode] => MH
            [maxPostalCode] => 96970
            [minPostalCode] => 96960
        )

    [39] => stdClass Object
        (
            [countryName] => Macedonia
            [numPostalCodes] => 220
            [countryCode] => MK
            [maxPostalCode] => 7550
            [minPostalCode] => 1000
        )

    [40] => stdClass Object
        (
            [countryName] => Northern Mariana Islands
            [numPostalCodes] => 4
            [countryCode] => MP
            [maxPostalCode] => 96952
            [minPostalCode] => 96950
        )

    [41] => stdClass Object
        (
            [countryName] => Martinique
            [numPostalCodes] => 16
            [countryCode] => MQ
            [maxPostalCode] => 97290
            [minPostalCode] => 97213
        )

    [42] => stdClass Object
        (
            [countryName] => Mexico
            [numPostalCodes] => 75203
            [countryCode] => MX
            [maxPostalCode] => 99998
            [minPostalCode] => 01000
        )

    [43] => stdClass Object
        (
            [countryName] => Netherlands
            [numPostalCodes] => 5104
            [countryCode] => NL
            [maxPostalCode] => 9999
            [minPostalCode] => 1000
        )

    [44] => stdClass Object
        (
            [countryName] => Norway
            [numPostalCodes] => 4565
            [countryCode] => NO
            [maxPostalCode] => 9991
            [minPostalCode] => 0001
        )

    [45] => stdClass Object
        (
            [countryName] => New Zealand
            [numPostalCodes] => 1737
            [countryCode] => NZ
            [maxPostalCode] => 9893
            [minPostalCode] => 0110
        )

    [46] => stdClass Object
        (
            [countryName] => Pakistan
            [numPostalCodes] => 11847
            [countryCode] => PK
            [maxPostalCode] => 97320
            [minPostalCode] => 10010
        )

    [47] => stdClass Object
        (
            [countryName] => Poland
            [numPostalCodes] => 22000
            [countryCode] => PL
            [maxPostalCode] => 99-440
            [minPostalCode] => 00-001
        )

    [48] => stdClass Object
        (
            [countryName] => Saint Pierre and Miquelon
            [numPostalCodes] => 2
            [countryCode] => PM
            [maxPostalCode] => 97502
            [minPostalCode] => 97501
        )

    [49] => stdClass Object
        (
            [countryName] => Puerto Rico
            [numPostalCodes] => 186
            [countryCode] => PR
            [maxPostalCode] => 00988
            [minPostalCode] => 00601
        )

    [50] => stdClass Object
        (
            [countryName] => Portugal
            [numPostalCodes] => 204006
            [countryCode] => PT
            [maxPostalCode] => 9980-999
            [minPostalCode] => 1000-001
        )

    [51] => stdClass Object
        (
            [countryName] => Reunion
            [numPostalCodes] => 44
            [countryCode] => RE
            [maxPostalCode] => 97490
            [minPostalCode] => 97400
        )

    [52] => stdClass Object
        (
            [countryName] => Russia
            [numPostalCodes] => 43538
            [countryCode] => RU
            [maxPostalCode] => 901993
            [minPostalCode] => 101000
        )

    [53] => stdClass Object
        (
            [countryName] => Sweden
            [numPostalCodes] => 14108
            [countryCode] => SE
            [maxPostalCode] => 98499
            [minPostalCode] => 10005
        )

    [54] => stdClass Object
        (
            [countryName] => Slovenia
            [numPostalCodes] => 557
            [countryCode] => SI
            [maxPostalCode] => 9600
            [minPostalCode] => 1000
        )

    [55] => stdClass Object
        (
            [countryName] => Slovakia
            [numPostalCodes] => 4152
            [countryCode] => SK
            [maxPostalCode] => 992 01
            [minPostalCode] => 010 01
        )

    [56] => stdClass Object
        (
            [countryName] => San Marino
            [numPostalCodes] => 10
            [countryCode] => SM
            [maxPostalCode] => 47899
            [minPostalCode] => 47890
        )

    [57] => stdClass Object
        (
            [countryName] => Thailand
            [numPostalCodes] => 902
            [countryCode] => TH
            [maxPostalCode] => 96220
            [minPostalCode] => 10100
        )

    [58] => stdClass Object
        (
            [countryName] => Turkey
            [numPostalCodes] => 2130
            [countryCode] => TR
            [maxPostalCode] => 81910
            [minPostalCode] => 01010
        )

    [59] => stdClass Object
        (
            [countryName] => United States
            [numPostalCodes] => 43624
            [countryCode] => US
            [maxPostalCode] => 99950
            [minPostalCode] => 00210
        )

    [60] => stdClass Object
        (
            [countryName] => Vatican
            [numPostalCodes] => 2
            [countryCode] => VA
            [maxPostalCode] => 00120
            [minPostalCode] => 00120
        )

    [61] => stdClass Object
        (
            [countryName] => U.S. Virgin Islands
            [numPostalCodes] => 16
            [countryCode] => VI
            [maxPostalCode] => 00851
            [minPostalCode] => 00801
        )

    [62] => stdClass Object
        (
            [countryName] => Mayotte
            [numPostalCodes] => 3
            [countryCode] => YT
            [maxPostalCode] => 97640
            [minPostalCode] => 97600
        )

    [63] => stdClass Object
        (
            [countryName] => South Africa
            [numPostalCodes] => 3920
            [countryCode] => ZA
            [maxPostalCode] => 9992
            [minPostalCode] => 0002
        )

)
