--TEST--
Test for Services_GeoNames::wikipediaSearch() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->wikipediaSearch(array(
        'q'       => 'toulouse',
        'maxRows' => 1,
        'style'   => 'short'
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
            [summary] => Toulouse (, and in the local accent) (Occitan: ''Tolosa'', pronounced ) is a city in southwest France on the banks of the Garonne River, half-way between the Atlantic Ocean and the Mediterranean Sea. With 1,117,000 inhabitants in 2007, the Toulouse metropolitan area is the fifth-largest in France and the fastest growing in Europe (...)
            [title] => Toulouse
            [wikipediaUrl] => en.wikipedia.org/wiki/Toulouse
            [elevation] => 0
            [countryCode] => FR
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/98000/thumb-97064-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 0
        )

)
