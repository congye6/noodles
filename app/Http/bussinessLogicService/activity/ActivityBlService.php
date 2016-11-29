<?php
namespace App\Http\bussinessLogicService\activity;
use App\Http\vo\ActivityInfoVO;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 19:49
 */
interface ActivityBlService{
	public function publish(ActivityInfoVO $vo);

	public function getActivities();

	public function getMyActivities($userName);

	public function getActivity($activityId);


	/**
	 * 统计用户参加了多少次竞赛
	 * 包括自己创建的
	 * @param $userName
	 */
	public function getActivityCount($userName);
}