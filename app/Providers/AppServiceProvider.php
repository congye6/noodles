<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){

	    /**
	     * bl
	     */
    	$this->app->bind(
	        'App\Http\bussinessLogicService\user\LoginBlService',
	        'App\Http\bussinessLogicService\impl\user\LoginBl'
        );

	    $this->app->bind(
		    'App\Http\bussinessLogicService\activity\ActivityBlService',
		    'App\Http\bussinessLogicService\impl\activity\ActivityBl'
	    );

	    $this->app->bind(
		    'App\Http\bussinessLogicService\activity\PartnerBlService',
		    'App\Http\bussinessLogicService\impl\activity\PartnerBl'
	    );

	    /**
	     * data
	     */
	    $this->app->bind(
		    'App\Http\dataService\user\UserDataService',
		    'App\Http\dataService\impl\user\UserData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\activity\ActivityDataService',
		    'App\Http\dataService\impl\activity\ActivityData'
	    );


    }
}
