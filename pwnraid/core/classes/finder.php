<?php
class Finder extends \Fuel\Core\Finder
{

	public static function instance()
	{
		if ( ! static::$instance)
		{
			static::$instance = static::forge(array(USRPATH, APPPATH, COREPATH));
		}

		return static::$instance;
	}

}