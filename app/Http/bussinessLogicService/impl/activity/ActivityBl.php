<?php
namespace App\Http\bussinessLogicService\impl\activity;
use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\bussinessLogicService\activity\PartnerBlService;
use App\Http\dataService\activity\ActivityDataService;
use App\Http\tool\DateTool;
use App\Http\tool\ObjectTool;
use App\Http\vo\ActivityInfoVO;
use App\Http\vo\ActivityVO;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 19:52
 */
class ActivityBl implements ActivityBlService {

	private $data;

	private $partnerBl;

	function __construct(ActivityDataService $data,PartnerBlService $partnerBl){
		$this->data=$data;
		$this->partnerBl=$partnerBl;
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

		$this->partnerBl->joinActivity($vo->publisher);
		return 'true';
	}

	public function getMyActivities($userName){
		return $this->data->getMyActivities($userName);
	}

	public function getActivities(){
		$activityList=$this->data->getActivities();


		$activityVOList=[];
		foreach($activityList as $activity){
			$activityVO=$this->calculate($activity);
			array_push($activityVOList,$activityVO);
		}



		return $activityVOList;
	}

	public function getActivity($activityId){
		$activity=$this->data->getActivity($activityId);

		$activityVO=$this->calculate($activity);
		return $activityVO;
	}


	private function calculate($activity){
		$now=DateTool::today();
		$isBegin='开始';


		if(DateTool::isLatter($activity->startTime,$now)){
			//还没开始
			$result=DateTool::minus($activity->startTime,$now);

		}else{
			//开始,计算离结束的时间
			$isBegin='结束';
			$result=DateTool::minus($activity->endTime,$now);
		}

		$activityVO=new ActivityVO($activity,$isBegin,$result['day'],$result['hour']);
		return $activityVO;
	}
}