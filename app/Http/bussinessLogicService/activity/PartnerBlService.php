<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-11
 * Time: 19:49
 */

namespace App\Http\bussinessLogicService\activity;


interface PartnerBlService{
	/**
	 * 参加竞赛
	 * 创建竞赛时需要创建者不需要加入竞赛
	 * @param $activityId
	 * @param $userName
	 * @return mixed
	 */
	public function joinActivity($activityId,$userName);

	public function getPartner($activityId);

	public function isInActivity($activityId,$userName);
}