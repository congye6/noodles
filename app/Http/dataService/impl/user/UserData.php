<?php
namespace App\Http\dataService\impl\user;
use App\Http\dataService\user\UserDataService;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: congye6
 * Date: 2016-11-04
 * Time: 16:31
 */
class UserData implements UserDataService {
	public function getUser($userName){
		$user=DB::table('User')->where('userName','congye6')->first();
		echo $user.userName;
	}

	public function addUser($userPO){

	}
}