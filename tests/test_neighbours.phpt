--TEST--
Test for Services_GeoNames::neighbours() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->neighbours(2658434);
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
            [countryName] => Austria
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => AT
            [lng] => 13.3333333
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Austria
            [fcode] => PCLI
            [geonameId] => 2782113
            [lat] => 47.3333333
            [population] => 8205000
            [adminName1] => 
        )

    [1] => stdClass Object
        (
            [countryName] => France
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => FR
            [lng] => 2
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => France
            [fcode] => PCLI
            [geonameId] => 3017382
            [lat] => 46
            [population] => 64094000
            [adminName1] => 
        )

    [2] => stdClass Object
        (
            [countryName] => Germany
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => DE
            [lng] => 10.5
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Germany
            [fcode] => PCLI
            [geonameId] => 2921044
            [lat] => 51.5
            [population] => 82369000
            [adminName1] => 
        )

    [3] => stdClass Object
        (
            [countryName] => Italy
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => IT
            [lng] => 12.8333333
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Italy
            [fcode] => PCLI
            [geonameId] => 3175395
            [lat] => 42.8333333
            [population] => 58145000
            [adminName1] => 
        )

    [4] => stdClass Object
        (
            [countryName] => Liechtenstein
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => LI
            [lng] => 9.5333333
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => Liechtenstein
            [fcode] => PCLI
            [geonameId] => 3042058
            [lat] => 47.1666667
            [population] => 33717
            [adminName1] => 
        )

)
