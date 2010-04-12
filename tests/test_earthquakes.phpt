--TEST--
Test for Services_GeoNames::earthquakes() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->earthquakes(array(
        'north' => 15,
        'south' => -15,
        'east'  => -15,
        'west'  => 15,
        'date'  => '2007-07-31',
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
            [eqid] => 2007byar
            [magnitude] => 6.1
            [lng] => %s
            [src] => us
            [datetime] => 2007-05-04 12:06:52
            [depth] => 10
            [lat] => %s
        )

    [1] => stdClass Object
        (
            [eqid] => 2007atai
            [magnitude] => 5.1
            [lng] => %s
            [src] => us
            [datetime] => 2007-04-04 00:56:53
            [depth] => 10
            [lat] => %s
        )

    [2] => stdClass Object
        (
            [eqid] => vaap
            [magnitude] => 5.2
            [lng] => %s
            [src] => us
            [datetime] => 2006-11-13 08:53:58
            [depth] => 10
            [lat] => %s
        )

    [3] => stdClass Object
        (
            [eqid] => pzai
            [magnitude] => 5.4
            [lng] => %s
            [src] => us
            [datetime] => 2006-07-10 07:21:38
            [depth] => 10
            [lat] => %s
        )

)
