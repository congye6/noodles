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

	    /**
	     * data
	     */
	    $this->app->bind(
		    'App\Http\dataService\user\UserDataService',
		    'App\Http\dataService\impl\user\UserData'
	    );


    }
}
