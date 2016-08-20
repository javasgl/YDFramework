<?php

/**
 * @author songgl
 * @since 2016-08-21 01:19
 */
class BaseController
{

	protected $assignData;

	public function assign( $key , $value )
	{
		$this->assignData[ $key ] = $value;
	}

	public function display( $views )
	{
		if( is_file( APP . "/views/{$views}.php" ) )
		{
			extract( $this->assignData );
			require_once( APP . "/views/{$views}.php" );
		}
	}
}