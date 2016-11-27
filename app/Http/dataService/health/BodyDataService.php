<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-27
 * Time: 10:09
 */

namespace App\Http\dataService\health;


use App\Http\vo\BodyVO;

interface BodyDataService{
	public function addBodyData(BodyVO $vo);

	public function updateBodyData(BodyVO $vo);

	public function getBodyData($userName,$date);

	public function getHistoryBodyData($userName);
}