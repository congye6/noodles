<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-17
 * Time: 17:59
 */

namespace App\Http\Controllers\Health;


use App\Http\Controllers\Controller;

class BodyController extends Controller {
	public function getBodyInfo(){
		return view('health.body');
	}

}