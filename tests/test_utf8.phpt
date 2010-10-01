--TEST--
Test for utf-8 strings
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';
require_once 'HTTP/Request2/Observer/Log.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));

try {
    $ret = $geo->search(array('q' => 'mänttä'));
    print_r($ret);
} catch (Services_GeoNames_HTTPException $exc) {
    echo $exc->getMessage() . "\n";
}

?>
--EXPECTF--
Array
(
    [0] => stdClass Object
        (
            [countryName] => Finland
            [adminCode1] => 15
            [fclName] => city, village,...
            [countryCode] => FI
            [lng] => 24.6333333
            [fcodeName] => populated place
            [toponymName] => Mänttä
            [fcl] => P
            [name] => Mänttä
            [fcode] => PPL
            [geonameId] => 646705
            [lat] => 62.0333333
            [adminName1] => Western Finland
            [population] => 6459
        )

    [1] => stdClass Object
        (
            [countryName] => Finland
            [adminCode1] => 15
            [fclName] => country, state, region,...
            [countryCode] => FI
            [lng] => 24.6333333
            [fcodeName] => third-order administrative division
            [toponymName] => Mänttä
            [fcl] => A
            [name] => Mänttä
            [fcode] => ADM3
            [geonameId] => 646706
            [lat] => 62.05
            [adminName1] => Western Finland
            [population] => 0
        )

    [2] => stdClass Object
        (
            [countryName] => Finland
            [adminCode1] => 15
            [fclName] => stream, lake, ...
            [countryCode] => FI
            [lng] => 23.0666667
            [fcodeName] => shoal(s)
            [toponymName] => Mänttä
            [fcl] => H
            [name] => Mänttä
            [fcode] => SHOL
            [geonameId] => 818216
            [lat] => 63.9833333
            [adminName1] => Western Finland
            [population] => 0
        )

)
