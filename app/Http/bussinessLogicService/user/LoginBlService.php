<?php
namespace App\Http\bussinessLogicService\user;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-04
 * Time: 16:23
 */
interface LoginBlService{
	public function login($userName,$password);

	public function register($userVO);
}