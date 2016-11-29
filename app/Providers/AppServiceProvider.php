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

	    $this->app->bind(
		    'App\Http\bussinessLogicService\friends\FriendsBlService',
		    'App\Http\bussinessLogicService\impl\friends\FriendsBl'
	    );

	    $this->app->bind(
		    'App\Http\bussinessLogicService\friends\MessageBlService',
		    'App\Http\bussinessLogicService\impl\friends\MessageBl'
	    );

	    $this->app->bind(
		    'App\Http\bussinessLogicService\health\StepBlService',
		    'App\Http\bussinessLogicService\impl\health\StepBl'
	    );

	    $this->app->bind(
		    'App\Http\bussinessLogicService\health\StepDetailBlService',
		    'App\Http\bussinessLogicService\impl\health\StepDetailBl'
	    );

	    $this->app->bind(
		    'App\Http\bussinessLogicService\health\BodyBlService',
		    'App\Http\bussinessLogicService\impl\health\BodyBl'
	    );
	    $this->app->bind(
		    'App\Http\bussinessLogicService\health\SleepBlService',
		    'App\Http\bussinessLogicService\impl\health\SleepBl'
	    );
	    $this->app->bind(
		    'App\Http\bussinessLogicService\user\UserBlService',
		    'App\Http\bussinessLogicService\impl\user\UserBl'
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

	    $this->app->bind(
		    'App\Http\dataService\activity\PartnerDataService',
		    'App\Http\dataService\impl\activity\PartnerData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\friends\FriendsDataService',
		    'App\Http\dataService\impl\friends\FriendsData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\friends\MessageDataService',
		    'App\Http\dataService\impl\friends\MessageData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\health\StepDataService',
		    'App\Http\dataService\impl\health\StepData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\health\StepDetailDataService',
		    'App\Http\dataService\impl\health\StepDetailData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\health\BodyDataService',
		    'App\Http\dataService\impl\health\BodyData'
	    );

	    $this->app->bind(
		    'App\Http\dataService\health\SleepDataService',
		    'App\Http\dataService\impl\health\SleepData'
	    );
	    $this->app->bind(
		    'App\Http\dataService\health\StepGoalDataService',
		    'App\Http\dataService\impl\health\StepGoalData'
	    );


    }
}
