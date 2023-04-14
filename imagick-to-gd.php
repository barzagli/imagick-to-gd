<?php
/**
 * @package ImagickToGD
 */

/**
Plugin Name: Imagick to GD
Plugin URI:  https://github.com/barzagli/imagick-to-gd
Description: Sets GD to the default image processor.
Version: 1.0.0
Requires at least: 5.5
Requires PHP: 7.2
Author: Barzagli, Lucas
Author URI: https://github.com/barzagli
License: GPLv2 or later
Text Domain: imagick-to-gd
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.


Copyright 2005-2015 Automattic, Inc.

*/

// Checking if the plugin's name is the same of folder


add_action('add_action', 'absToPathExists');

function absToPathExitis(){

	if ( ! defined('ABSPATH')){

		die('The file you are trying to access does not exists or you are not allowed to!');
	}

	return add_filter('wp_image_editors', array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick'));
}


