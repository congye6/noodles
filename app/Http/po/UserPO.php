<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-11-06
 * Time: 10:07
 */

namespace App\Http\po;


class UserPO{
    private $userName;

    private $password;

    private $coins;

    /**
     * @return mixed
     */
    public function getUserName(){
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName){
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getPassword(){
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCoins(){
        return $this->coins;
    }

    /**
     * @param mixed $coins
     */
    public function setCoins($coins){
        $this->coins = $coins;
    }


}