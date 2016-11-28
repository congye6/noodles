<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 11:19
 */

namespace App\Http\dataService\health;


use App\Http\vo\SleepVO;

interface SleepDataService{

	public function addSleepData(SleepVO $sleepVO);

	public function getSleepData($userName,$date);

	public function getSleepHistory($userName);

}