<?php

namespace ShawnSandy\PageKit;

use Illuminate\Support\ServiceProvider;

use App\Client ;

class ThemeServiceProvider extends  ServiceProvider {



	/**
	* Bootstrap the application services.
	     *
	     * @return void
	     */
	    public function boot(Client $client)
	    {
		$views = resources_path(
		            "views/pagekit/{$client->theme->name}"
		        );

		$this->loadViewsFrom($views, 'pagekit');
	}

}
