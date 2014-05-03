<?php namespace Flynsarmy\FormBuilder;

use Illuminate\Support\ServiceProvider;

class FormBuilderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

    public function boot()
    {
        Element::setFormBuilder($this->app['form']);
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('formbuilder', 'Flynsarmy\FormBuilder\FormBuilderManager');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}
