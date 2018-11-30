<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;

class NavServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('*', function ($view) {
			$page = page::all();
			return $view->with('pages', $page);
		});
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */

		// Do not add evenlistener inside register
	public function register()
	{
        //
	}
}
