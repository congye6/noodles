<?php
namespace App\Http\bussinessLogicService\impl\activity;
use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\dataService\activity\ActivityDataService;
use App\Http\vo\ActivityInfoVO;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 19:52
 */
class ActivityBl implements ActivityBlService {

	private $data;

	function __construct(ActivityDataService $data){
		$this->data=$data;
	}


	public function publish(ActivityInfoVO $vo){
		if($vo==null||$vo->isNull())
			return '还有必填项未填';
		$this->data->addActivity($vo);
	}
}