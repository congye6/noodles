<?php
/**
 * Created by PhpStorm.
 * User: congye6
 * Date: 2016-10-17
 * Time: 13:35
 */

namespace App\Http\Controllers\Health;


use App\Http\Controllers\Controller;

class WalkController extends Controller {

	public function getWalkInfo(){
		return view('health.walk');
	}



}