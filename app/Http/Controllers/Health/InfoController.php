<?php
namespace App\Http\Controllers\Health;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-17
 * Time: 10:34
 */
class InfoController extends Controller {
	public function getHealthInfo(){
		return view('health.info');
	}
}
