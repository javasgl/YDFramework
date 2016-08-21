<?php
/**
 * @author songgl
 * @since 2016-08-21 00:15
 * 入口文件
 */
define( 'BASE' , dirname( __FILE__ ) );
define( 'CORE' , BASE . '/core' );
define( 'APP' , BASE . '/app' );
define( 'CONTROLLER' , APP . '/controller' );
define( 'MODELS' , APP . '/models' );
define( 'VIEWS' , APP . '/views' );
define( 'DEBUG' , true );

include 'vendor/autoload.php';

if( DEBUG )
{
	$whoops = new Whoops\Run();
	$whoops->pushHandler( new Whoops\Handler\PrettyPageHandler() );
	$whoops->register();
	ini_set( 'display_errors' , 'On' );
}
else
{
	ini_set( 'display_errors' , 'Off' );
}
include CORE . '/core.php';
spl_autoload_register( '\core\Core::autoLoad' );

\core\Core::run();

