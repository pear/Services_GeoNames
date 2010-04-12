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
--EXPECTF--
Array
(
    [0] => stdClass Object
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

    [1] => stdClass Object
        (
            [countryName] => France
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => FR
            [lng] => %s
            [fcodeName] => independent political entity
            [fcl] => A
            [name] => France
            [fcode] => PCLI
            [geonameId] => 3017382
            [lat] => %s
            [population] => 64094000
            [adminName1] => 
        )

    [2] => stdClass Object
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

    [3] => stdClass Object
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

    [4] => stdClass Object
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

)
