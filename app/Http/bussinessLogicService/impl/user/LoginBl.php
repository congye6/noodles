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

	function __construct(UserDataService $data=null){
		$this->data=$data;
	}

	public function login($userName,$password){
	    $isNull=$userName==null||$password==null;
	    if($isNull)
	        return '请完成输入';
		$userVO=$this->data->getUser($userName);

        if($userVO==null)
            return '用户名错误';

        if($password!=$userVO->password)
            return '密码错误';

		return  'true';
	}

	public function register($userVO){
        $isNull=$userVO==null||$userVO->isNull();
        if($isNull)
            return '请完成输入';

        //用户已存在
        $user=$this->data->getUser($userVO->userName);
        if($user!=null)
            return '用户名已存在';

        $this->data->addUser($userVO);
        return 'true';

	}

}