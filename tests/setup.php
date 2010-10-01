<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR Services_GeoNames package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Services 
 * @package   Services_GeoNames
 * @author    David Jean Louis <izi@php.net>
 * @copyright 2008-2009 David Jean Louis
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/Services_GeoNames
 * @since     File available since release 0.1.0
 */

require_once 'Services/GeoNames.php';
require_once 'HTTP/Request2/Response.php';
require_once 'HTTP/Request2/Adapter/Mock.php';

/**
 * Return the Services_GeoNames with either a mock adapter or the real adapter
 * depending whether the SERVICES_GEONAMES_LIVETEST environment variable is set
 * or not.
 *
 * @param string $testname The test name (without extension)
 * @param string $user     Username (optional)
 * @param string $token    Auth token (optional)
 *
 * @return Services_GeoNames
 */
function Services_GeoNames_factory($testname, $user = null, $token = null)
{
    $geo = new Services_GeoNames($user, $token);

    if (!getenv('SERVICES_GEONAMES_LIVETEST')) {
        // test with a mock adapter
        $mock = new HTTP_Request2_Adapter_Mock();
        if ($testname == 'test_other_04') {
            $resp = new HTTP_Request2_Response('HTTP/1.1 404 Not Found', false);
        } else if ($testname == 'test_other_07') {
            $resp = new HTTP_Request2_Response('HTTP/1.1 404 Not Found', false);
            $mock->addResponse($resp);
            $resp = new HTTP_Request2_Response('HTTP/1.1 404 Not Found', false);
            $mock->addResponse($resp);
            $resp = new HTTP_Request2_Response('HTTP/1.1 404 Not Found', false);
        } else {
            $resp = new HTTP_Request2_Response('HTTP/1.1 200 Success', false);
            $file = dirname(__FILE__) . '/data/' . $testname . '.dat';
            $resp->appendBody(file_get_contents($file));
        }
        $mock->addResponse($resp);
        $geo->getRequest()->setAdapter($mock);
    }

    return $geo;
}

