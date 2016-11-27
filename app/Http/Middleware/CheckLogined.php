<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 15:09
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class CheckLogined{

	public function handle(Request $request, Closure $next){

	    if(empty($_COOKIE['userName']))
            return redirect('/loginPage');
		$userName=$_COOKIE['userName'];

		$isLogined=$userName!=null&&$userName!='';


		if(!$isLogined)
			return redirect('/loginPage');

		return $next($request);
	}

}