<?php
namespace App\Http\bussinessLogicService\impl\activity;
use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\dataService\activity\ActivityDataService;
use App\Http\tool\DateTool;
use App\Http\tool\ObjectTool;
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


		if(DateTool::isPast($vo->startTime))
			return '开始时间不能为过去时间';

		if(!DateTool::isLatter($vo->endTime,$vo->startTime))
			return '结束时间要在开始时间之前哦';

		if ($vo->enterFee<0)
			return '保证金不能为负数';

		if($vo->enterFee>10000)
			return '保证金要小于1万';

		$this->data->addActivity($vo);
		return 'true';
	}

	public function getActivities($userName){
		return $this->data->getActivities($userName);
	}
}