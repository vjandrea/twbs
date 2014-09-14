<?php namespace Vjandrea\Twbs\Facades;

use Illuminate\Support\Facades\Facade;

class Twbs extends Facade {
	
	/**
	 * Returns the Facade accessor
	 *
	 * @return string
	 **/
	protected static function getFacadeAccessor()
	{
		return 'twbs';
	}

}