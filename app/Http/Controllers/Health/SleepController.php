<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-17
 * Time: 18:00
 */

namespace App\Http\Controllers\Health;


use App\Http\bussinessLogicService\health\SleepBlService;
use App\Http\Controllers\Controller;

class SleepController extends Controller {

    private $bl;

    public function __construct(SleepBlService $bl){
        $this->bl=$bl;
    }

    public function getSleepInfo(){
        $todayInfo=$this->bl->todaySleepInfo($_COOKIE['userName']);
		return view('health.sleep')->with('todayInfo',$todayInfo);
	}

	public function deepSleepRate(){
	    return $this->bl->deepOrLightSleep($_COOKIE['userName']);
    }
}