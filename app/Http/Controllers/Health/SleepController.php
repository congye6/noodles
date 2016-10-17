<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-17
 * Time: 18:00
 */

namespace App\Http\Controllers\Health;


use App\Http\Controllers\Controller;

class SleepController extends Controller {
	public function getSleepInfo(){
		return view('health.sleep');
	}
}