<?php namespace Vjandrea\Twbs;

use Illuminate\Support\ServiceProvider;

class TwbsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boots the package
	 *
	 * @return void
	 * @author 
	 **/
	public function boot()
	{
		$this->package('vjandrea/twbs');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app['twbs'] = $this->app->share(function(){ 
			return new Twbs; 
		});

		$this->app->booting(function(){
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Twbs','Vjandrea\Twbs\Facades\Twbs');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('twbs');
	}

}
