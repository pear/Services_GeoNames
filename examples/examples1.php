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
 * @link      http://www.geonames.org/export/webservice-exception.html
 * @since     File available since release 0.1.0
 * @filesource
 */

/**
 * Include the geonames package.
 */
require_once 'Services/GeoNames.php';

$geo = new Services_GeoNames();

// search for all cities named 'Paris'
$cities = $geo->search(array('name_equals' => 'Paris'));
echo "List of cities named Paris:\n";
foreach ($cities as $city) {
    printf(" - %s (%s)\n", $city->name, $city->countryName);
}
echo "\n";

// find all postal codes near by "Toulouse" in a radius of 10km 
$postalCodes = $geo->findNearbyPostalCodes(array(
    'lat'     => 43.606,
    'lng'     => 1.444,
    'radius'  => 10, // 10km
    'maxRows' => 100
));
echo "List of postal codes near by Toulouse in a radius of 10km:\n";
foreach ($postalCodes as $code) {
    printf(" - %s (%s)\n", $code->postalCode, $code->placeName);
}
echo "\n";

// get the list of all countries and capitals in spanish
$countries = $geo->countryInfo(array('lang' => 'es'));
echo "List of all countries in spanish language:\n";
foreach ($countries as $country) {
    printf(" - %s (capital: %s)\n", $country->countryName, $country->capital);
}
echo "\n";

// get the neightbours countries of France
$array      = $geo->countryInfo(array('country' => 'FR'));
$france     = $array[0];
$neighbours = $geo->neighbours(array('geonameId' => $france->geonameId));
echo "Neighbours of France are:\n";
foreach ($neighbours as $neighbour) {
    printf(" - %s\n", $neighbour->countryName);
}
