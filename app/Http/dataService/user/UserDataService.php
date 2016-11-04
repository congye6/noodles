<?php
namespace App\Http\dataService\user;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-04
 * Time: 16:30
 */
interface UserDataService{
	public function getUser($userName);

	public function addUser($userPO);
}