<?php 
namespace WPPF;
use \Carbon\Carbon;

/**
 * Base 
 * 
 * @package WPPF
 * @subpackage Wordpress
 * @version 1.0.0 
 */ 
class Base
{
	/**
	 * Base name
	 */ 
	protected static $basename = 'wppf/base';

	/**
	 * Autoload
	 */ 	
	public static function autoload()
	{
		static::plugins_loaded();
	}

	/**
	 * Plugisn loaded
	 */ 
	public static function plugins_loaded()
	{
		register_activation_hook( static::$basename, array( 'Base', 'activated' ) );
		register_deactivation_hook( static::$basename, array( 'Base', 'deactivated' ) );
	}

	/**
	 * Plugin activated
	 */ 
	public static function activated()
	{
		load_plugin_textdomain( 'wppf' );
	}

	/**
	 * Plugin deactivated
	 */ 
	public static function deactivated()
	{

	}
}