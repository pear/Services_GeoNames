--TEST--
Test for Services_GeoNames::findNearby() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearby(array(
        'lat'          => 48.865618158309374,
        'lng'          => 2.344207763671875,
        'featureClass' => 'P',
        'featureCode'  => array('PPLA', 'PPL', 'PPLC')
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
            [countryName] => France
            [adminCode1] => A8
            [fclName] => city, village,...
            [countryCode] => FR
            [lng] => %s
            [fcodeName] => capital of a political entity
            [distance] => 1.3984
            [fcl] => P
            [name] => Paris
            [fcode] => PPLC
            [geonameId] => 2988507
            [lat] => %s
            [population] => 2138551
            [adminName1] => Île-de-France
        )

)
