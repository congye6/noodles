<?php
namespace App\Http\Controllers\User;
/**
 * Created by PhpStorm.
 * User: congye6
 * Date: 2016-10-21
 * Time: 17:07
 */



use App\Http\Controllers\Controller;

class ProfileController extends Controller {
	public function profile($userName){
		return view('user.profile')->with(['userName'=>$userName]);
	}

	public function myProfile(){
		return view('user.profile')->with(['userName'=>$_COOKIE['userName']]);
	}

}