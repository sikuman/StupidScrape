<?php
/*
Plugin Name: Google Image for StupidPie
Plugin URI:  http://www.dojo.cc
Description: Penambahan kemampuan memakai Google Image untuk StupidPie
Version:     0.1
Author:      Internet Marketing Dojo
Author URI:  http://www.dojo.cc
License:     Halal
*/

use Buchin\GoogleContentGrabber\GoogleContentGrabber;

define('SPP_GOOGLE_IMAGE', dirname(__FILE__));


require_once(SPP_GOOGLE_IMAGE . '/vendor/autoload.php');

function scrape_google_image($keyword)
{
	$images = GoogleContentGrabber::grab($keyword);

	return collect($images);
}