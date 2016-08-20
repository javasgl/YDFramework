<?php

/**
 * @author songgl
 * @since 2016-08-21 01:14
 */
class Index extends BaseController
{

	public function index()
	{
		$this->assign( 'key' , 'this is key value' );
		$this->display( 'index' );
	}

}