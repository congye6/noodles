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
use App\Http\vo\BodyVO;

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
		$result=$this->bl->getBodyLineChartData($_COOKIE['userName']);
		return $result;
	}

	public function setBodyInfo($weight,$height,$goal){
        return $this->bl->setBodyInfo(new BodyVO($_COOKIE['userName'],$weight,$height,$goal));
    }

}