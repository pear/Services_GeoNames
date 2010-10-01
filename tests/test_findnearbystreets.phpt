--TEST--
Test for Services_GeoNames::findNearbyStreets() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->findNearbyStreets(array(
        'lat'   => 37.451,
        'lng'   => -122.18,
        'style' => 'full'
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
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 601
            [countryCode] => US
            [line] => -122.179775 37.452138,-122.180975 37.450738
            [placename] => Menlo Park
            [fraddr] => 600
            [adminName2] => San Mateo
            [distance] => 0.09
            [toaddl] =>         735
            [name] => Roble Ave
            [cfcc] => A41
            [toaddr] =>         698
            [adminName1] => California
        )

    [1] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 701
            [countryCode] => US
            [line] => -122.180475 37.450338,-122.181075 37.450538
            [placename] => Menlo Park
            [fraddr] => 700
            [adminName2] => San Mateo
            [distance] => 0.08
            [toaddl] =>         799
            [name] => Curtis Way
            [cfcc] => A41
            [toaddr] =>         798
            [adminName1] => California
        )

    [2] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 601
            [countryCode] => US
            [line] => -122.179775 37.450038,-122.180275 37.449438
            [placename] => Menlo Park
            [fraddr] => 600
            [adminName2] => San Mateo
            [distance] => 0.11
            [toaddl] =>         699
            [name] => Kenwood Dr
            [cfcc] => A41
            [toaddr] =>         698
            [adminName1] => California
        )

    [3] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 501
            [countryCode] => US
            [line] => -122.178475 37.449238,-122.179775 37.450038
            [placename] => Menlo Park
            [fraddr] => 500
            [adminName2] => San Mateo
            [distance] => 0.11
            [toaddl] =>         599
            [name] => Kenwood Dr
            [cfcc] => A41
            [toaddr] =>         598
            [adminName1] => California
        )

    [4] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 737
            [countryCode] => US
            [line] => -122.180975 37.450738,-122.181075 37.450538
            [placename] => Menlo Park
            [fraddr] => 700
            [adminName2] => San Mateo
            [distance] => 0.09
            [toaddl] =>         747
            [name] => Roble Ave
            [cfcc] => A41
            [toaddr] =>         728
            [adminName1] => California
        )

    [5] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 801
            [countryCode] => US
            [line] => -122.180975 37.450738,-122.181875 37.451238
            [placename] => Menlo Park
            [fraddr] => 800
            [adminName2] => San Mateo
            [distance] => 0.09
            [toaddl] =>         899
            [name] => Curtis St
            [cfcc] => A41
            [toaddr] =>         898
            [adminName1] => California
        )

    [6] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 501
            [countryCode] => US
            [line] => -122.177375 37.450638,-122.179775 37.452138
            [placename] => Menlo Park
            [fraddr] => 500
            [adminName2] => San Mateo
            [distance] => 0.13
            [toaddl] =>         799
            [name] => El Camino Real
            [cfcc] => A31
            [toaddr] =>         798
            [adminName1] => California
        )

    [7] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 801
            [countryCode] => US
            [line] => -122.179775 37.452138,-122.180675 37.452538
            [placename] => Menlo Park
            [fraddr] => 800
            [adminName2] => San Mateo
            [distance] => 0.13
            [toaddl] =>         899
            [name] => El Camino Real
            [cfcc] => A31
            [toaddr] =>         898
            [adminName1] => California
        )

    [8] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 749
            [countryCode] => US
            [line] => -122.181075 37.450538,-122.181875 37.449738
            [placename] => Menlo Park
            [fraddr] => 730
            [adminName2] => San Mateo
            [distance] => 0.11
            [toaddl] =>         799
            [name] => Roble Ave
            [cfcc] => A41
            [toaddr] =>         798
            [adminName1] => California
        )

    [9] => stdClass Object
        (
            [postalcode] => 94025
            [adminCode2] => 081
            [adminCode1] => CA
            [fraddl] => 601
            [countryCode] => US
            [line] => -122.180675 37.452538,-122.181875 37.451238
            [placename] => Menlo Park
            [fraddr] => 600
            [adminName2] => San Mateo
            [distance] => 0.17
            [toaddl] =>         699
            [name] => Live Oak Ave
            [cfcc] => A41
            [toaddr] =>         664
            [adminName1] => California
        )

)
