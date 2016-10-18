<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:37
 */

namespace App\Http\Controllers\Health;


use App\Http\Controllers\Controller;

class HistoryController extends Controller {
    public function historyGoal(){
        return view('goal.history');
    }
}