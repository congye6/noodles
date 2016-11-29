<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-29
 * Time: 10:28
 */

namespace App\Http\bussinessLogicService\user;


interface UserBlService{
	/**
	 * 3级以上才可以发送消息
	 * @param $userName
	 * @return mixed
	 */
	public function isCanSendMessage($userName);

	/**
	 * 2级以上用户才可以关注
	 * @param $userName
	 * @return mixed
	 */
	public function isCanFollow($userName);

	/**
	 * 增加使用noodles天数
	 * 1天为1级用户，7天以内为2级，7天以上为3级
	 * @param $userName
	 * @return mixed
	 */
	public function addWalkDay($userName);

	public function getUser($userName);

}