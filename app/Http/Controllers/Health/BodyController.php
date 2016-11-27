<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-17
 * Time: 17:59
 */

namespace App\Http\Controllers\Health;


use App\Http\bussinessLogicService\health\BodyBlService;
use App\Http\Controllers\Controller;

class BodyController extends Controller {
	private $bl;

	public function __construct(BodyBlService $bl){
		$this->bl=$bl;
	}

	public function getBodyInfo(){
		$history=$this->bl->getBodyHistory($_COOKIE['userName']);
		$todayInfo=$this->bl->getBodyInfo($_COOKIE['userName']);

		return view('health.body')->with(['history'=>$history,'todayInfo'=>$todayInfo]);
	}

	public function lineChartData(){
		return $this->bl->getBodyLineChartData($_COOKIE['userName']);
	}

}