<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:36
 */

namespace App\Http\Controllers\Goal;


use App\Http\Controllers\Controller;

class TodoController extends Controller {
    public function todo(){
        return view('goal.todo');
    }
}