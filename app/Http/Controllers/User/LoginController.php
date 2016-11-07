<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-04
 * Time: 16:18
 */

namespace App\Http\Controllers\User;



use App\Http\bussinessLogicService\user\LoginBlService;
use App\Http\Controllers\Controller;
use App\Http\vo\UserVO;
use Illuminate\Http\Request;


class LoginController extends Controller {

	private $bl;

	function __construct(LoginBlService $bl){
		$this->bl=$bl;
	}

	public function loginPage(){
	    return view('user.login');
    }

	public function login($userName,$password){
		$result=$this->bl->login($userName,$password);
		return $result;
	}

	public function register($userName,$password){
		$userVO=new UserVO($userName,$password);
		$result=$this->bl->register($userVO);
		return $result;
	}

}