<?php
namespace App\Http\Controllers\Goal;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:35
 */
class CreateController extends Controller  {
	public function createGoal(){
		return view('goal.create');
	}
}