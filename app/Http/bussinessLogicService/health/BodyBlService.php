<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-27
 * Time: 10:33
 */

namespace App\Http\bussinessLogicService\health;


use App\Http\vo\BodyVO;

interface BodyBlService{
	/**
	 * 获取最新身体信息
	 * 从历史数据中筛选最近的
	 * @param $userName
	 * @param $date
	 * @return mixed
	 */
	public function getBodyInfo($userName);

	/**
	 * 获取用户设置的身体信息历史
	 * 最多返回五条
	 * @param $userName
	 * @return mixed
	 */
	public function getBodyHistory($userName);

	/**
	 * 设置用户身体信息
	 * 如果当天已经存在则进行更新
	 * @param BodyVO $bodyVO
	 * @return mixed
	 */
	public function setBodyInfo(BodyVO $bodyVO);

	/**
	 * 获取折线图数据
	 * @param $userName
	 * @return mixed
	 */
	public function getBodyLineChartData($userName);

}