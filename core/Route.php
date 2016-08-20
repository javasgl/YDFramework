<?php

/**
 * @author songgl
 * @since 2016-08-21 00:36
 */
class Route
{
	public $_controller = 'Index';

	public $_action = 'index';

	function __construct()
	{

		if( !isset( $_SERVER[ 'REQUEST_URI' ] ) || $_SERVER[ 'REQUEST_URI' ] == '/' )
		{
			$this->_controller = 'Index';
			$this->_action = 'index';
		}
		else
		{
			$pathArr = explode( '/' , trim( $_SERVER[ 'REQUEST_URI' ] , '/' ) );

			if( isset( $pathArr[ 0 ] ) )
			{
				$this->_controller = $pathArr[ 0 ];
			}
			if( isset( $pathArr[ 1 ] ) )
			{
				$this->_action = $pathArr[ 1 ];
			}
			$count = count( $pathArr );
			$index = 2;
			while( $index < $count )
			{
				if( isset( $pathArr[ $index + 1 ] ) )
				{
					$_GET[ $pathArr[ $index ] ] = $pathArr[ $index + 1 ];
				}
				$index += 2;
			}
		}
	}

}