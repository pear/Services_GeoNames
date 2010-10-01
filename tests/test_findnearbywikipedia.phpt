--TEST--
Test for Services_GeoNames::findNearbyWikipedia() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearbyWikipedia(array(
        'lat'   => 47,
        'lng'   => 9,
        'style' => 'short'
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
            [summary] => The Glärnisch is a mountain of the Glarus Alps, Switzerland, consisting of two ridges of either side of the ''Glärnischfirn'' glacier: the ''Ruchen'' at 2901 m to the west, rising above the Klöntalersee, and the ''Bächistock'' at 2914 m to the southwest. The best known peak is the ''Vrenelisgärtli'' at 2904 m.  (...)
            [distance] => 0.1869
            [title] => Glärnisch
            [wikipediaUrl] => en.wikipedia.org/wiki/Gl%C3%A4rnisch
            [elevation] => 0
            [countryCode] => CH
            [lng] => %s
            [feature] => mountain
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [1] => stdClass Object
        (
            [summary] => Oberblegisee is a lake in the Canton of Glarus, Switzerland. It is located at an elevation of 1422 m, above Luchsingen. Its surface area is 0.17 km².  (...)
            [distance] => 2.3589
            [title] => Oberblegisee
            [wikipediaUrl] => en.wikipedia.org/wiki/Oberblegisee
            [elevation] => 0
            [countryCode] => CH
            [lng] => %s
            [feature] => waterbody
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [2] => stdClass Object
        (
            [summary] => Klöntalersee is a natural lake in the Canton of Glarus, Switzerland. Since 1908, it is used as a reservoir for electricity production. The construction of a dam led to a substantial increase of its volume.  (...)
            [distance] => 3.2011
            [title] => Klöntalersee
            [wikipediaUrl] => en.wikipedia.org/wiki/Kl%C3%B6ntalersee
            [elevation] => 0
            [countryCode] => CH
            [lng] => %s
            [feature] => waterbody
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/2000/thumb-1904-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [3] => stdClass Object
        (
            [summary] => The Canton of Glarus (German: ) is a canton in east central Switzerland. The capital is Glarus. There are 25 municipalities in the canton (July 2006). The population is German speaking and either Protestant or Catholic.  (...)
            [distance] => 5.3851
            [title] => Canton of Glarus
            [wikipediaUrl] => en.wikipedia.org/wiki/Canton_of_Glarus
            [elevation] => 0
            [countryCode] => CH
            [lng] => %s
            [feature] => adm1st
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [4] => stdClass Object
        (
            [summary] => Obersee is a lake on Oberseealp in the Canton of Glarus, Switzerland. Its surface area is 0.24 km².  (...)
            [distance] => 9.7244
            [title] => Obersee (Glarus)
            [wikipediaUrl] => en.wikipedia.org/wiki/Obersee_%28Glarus%29
            [elevation] => 0
            [countryCode] => CH
            [lng] => %s
            [feature] => waterbody
            [lang] => en
            [lat] => %s
            [population] => 0
        )

)
