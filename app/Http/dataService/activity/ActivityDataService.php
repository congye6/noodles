<?php
namespace App\Http\dataService\activity;
use App\Http\vo\ActivityInfoVO;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 19:54
 */
interface ActivityDataService{
	public function addActivity(ActivityInfoVO $vo);

	public function getActivities($userName);
}