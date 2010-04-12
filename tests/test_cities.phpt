--TEST--
Test for Services_GeoNames::cities() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->cities(array(
        'north' => 44.1,
        'south' => -9.9,
        'east'  => -22.4,
        'west'  => 55.2
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
            [fcodeName] => capital of a political entity
            [countrycode] => MX
            [fcl] => P
            [fclName] => city, village,...
            [name] => Mexico City
            [wikipedia] => en.wikipedia.org/wiki/Mexico_City
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 3530597
            [lat] => %s
            [population] => 11285654
        )

    [1] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => PH
            [fcl] => P
            [fclName] => city, village,...
            [name] => Manila
            [wikipedia] => 
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1701668
            [lat] => %s
            [population] => 10444527
        )

    [2] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => BD
            [fcl] => P
            [fclName] => city, village,...
            [name] => Dhaka
            [wikipedia] => en.wikipedia.org/wiki/Dhaka
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1185241
            [lat] => %s
            [population] => 10356500
        )

    [3] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => KR
            [fcl] => P
            [fclName] => city, village,...
            [name] => Seoul
            [wikipedia] => en.wikipedia.org/wiki/Seoul
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1835848
            [lat] => %s
            [population] => 10349312
        )

    [4] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => ID
            [fcl] => P
            [fclName] => city, village,...
            [name] => Jakarta
            [wikipedia] => en.wikipedia.org/wiki/Jakarta
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1642911
            [lat] => %s
            [population] => 8540121
        )

    [5] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => JP
            [fcl] => P
            [fclName] => city, village,...
            [name] => Tokyo
            [wikipedia] => en.wikipedia.org/wiki/Tokyo
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1850147
            [lat] => %s
            [population] => 8336599
        )

    [6] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => TW
            [fcl] => P
            [fclName] => city, village,...
            [name] => Taipei
            [wikipedia] => en.wikipedia.org/wiki/Taipei
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1668341
            [lat] => %s
            [population] => 7871900
        )

    [7] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => CN
            [fcl] => P
            [fclName] => city, village,...
            [name] => Beijing
            [wikipedia] => en.wikipedia.org/wiki/Beijing
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1816670
            [lat] => %s
            [population] => 7480601
        )

    [8] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => CO
            [fcl] => P
            [fclName] => city, village,...
            [name] => Bogotá
            [wikipedia] => en.wikipedia.org/wiki/Bogot%C3%A1
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 3688689
            [lat] => %s
            [population] => 7102602
        )

    [9] => stdClass Object
        (
            [fcodeName] => capital of a political entity
            [countrycode] => HK
            [fcl] => P
            [fclName] => city, village,...
            [name] => Hong Kong
            [wikipedia] => 
            [lng] => %s
            [fcode] => PPLC
            [geonameId] => 1819729
            [lat] => %s
            [population] => 7012738
        )

)
