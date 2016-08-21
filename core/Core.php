<?php
/**
 * @author songgl
 * @since 2016-08-21 00:23
 */
namespace core;
class Core
{
	public static function run()
	{
		$route = new \Route();
		$controller = $route->_controller;
		$action = $route->_action;
		if( is_file( APP . "/controller/{$controller}.php" ) )
		{
			require_once( APP . "/controller/{$controller}.php" );
			( new $controller() )->$action();
		}
		else
		{
			throw New \Exception( 'can not found file' . $controller . '->' . $action );
		}
	}

	public static function autoLoad( $clazz )
	{
		if( is_file( CORE . "/{$clazz}.php" ) )
		{
			require_once( CORE . "/{$clazz}.php" );
		}
		if( is_file( APP . "/{$clazz}.php" ) )
		{
			require_once( APP . "/{$clazz}.php" );
		}
		if( is_file( CONTROLLER . "/{$clazz}.php" ) )
		{
			require_once( CONTROLLER . "/{$clazz}.php" );
		}
		if( is_file( MODELS . "/{$clazz}.php" ) )
		{
			require_once( MODELS . "/{$clazz}.php" );
		}
	}
}