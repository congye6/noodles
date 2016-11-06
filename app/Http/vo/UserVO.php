<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-11-06
 * Time: 13:16
 */

namespace App\Http\vo;


class UserVO{
    public $userName;

    public $password;

    public $coins;

    public function isNull(){
        return $this->userName==null||$this->password==null;
    }
}