<?php 
/*
Plugin Name: WordPress Plugin Framework
Plugin URI: https://github.com/yespbs/Wordpress-Plugin-Framework
Description: WordPress Plugin Framework
Version: 1.0.0
Author: Priyabrata Sarkar
Author URI: http://yespbs.com/
License: MIT
Text Domain: wppf
*/

/**
 * Wordpress Plugin Framework
 * 
 * @package WPPF
 * @subpackage Wordpress
 * @version 1.0.0 
 */
if ( !function_exists( 'add_action' ) ) {
	echo 'Deny direct call.';
	exit;
}

require 'vendor/autoload.php';

WPPF\Base::autoload();
