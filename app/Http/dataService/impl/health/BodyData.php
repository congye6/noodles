<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-27
 * Time: 10:16
 */

namespace App\Http\dataService\impl\health;


use App\Http\dataService\health\BodyDataService;
use App\Http\tool\ObjectTool;
use App\Http\vo\BodyVO;
use Illuminate\Database\Eloquent\Model;

class BodyData extends Model  implements BodyDataService {

	protected $table = 'Body';

	protected $fillable = ['userName','date','weight','height','goal'];

	public function addBodyData(BodyVO $vo){
		BodyData::create(ObjectTool::objectToArray($vo));
	}

	public function updateBodyData(BodyVO $vo){
		BodyData::where([['userName',$vo->userName],['date',$vo->date]])->update(ObjectTool::objectToArray($vo));
	}

	public function getBodyData($userName,$date){
		return BodyData::where([['userName',$userName],['date',$date]])->get();
	}

	public function getHistoryBodyData($userName){
		return BodyData::where('userName',$userName)->get();
	}
}