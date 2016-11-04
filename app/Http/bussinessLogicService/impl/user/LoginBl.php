<?php
namespace App\Http\bussinessLogicService\impl\user;
use App\Http\bussinessLogicService\user\LoginBlService;
use App\Http\dataService\user\UserDataService;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-04
 * Time: 16:27
 */
class LoginBl implements LoginBlService {

	private $data;

	function __construct(UserDataService $data){
		$this->data=$data;
	}

	public function login($userName,$password){
		$result='true';
		$this->data->getUser($userName);
		return $result;
	}

	public function register($userVO){

	}

}