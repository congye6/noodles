<?php
namespace App\Http\bussinessLogicService\impl\activity;
use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\bussinessLogicService\activity\PartnerBlService;
use App\Http\dataService\activity\ActivityDataService;
use App\Http\tool\DateTool;
use App\Http\vo\ActivityDetailVO;
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

	/**
	 * 统计用户参加了多少次竞赛
	 * 包括自己创建的
	 * @param $userName
	 */
	public function getActivityCount($userName){
        $joinCount=$this->partnerBl->getJoinCount($userName);

        $publishCount=$this->data->getMyActivities($userName)->count();

        return $joinCount+$publishCount;
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

	public function getMyActivities($userName){
		$activityList=$this->data->getMyActivities($userName);


		$activityVOList=[];

		foreach($activityList as $activity){
			//已经结束
			if(DateTool::isPast($activity->endTime))
				continue;

			$activityVO=new ActivityVO();
			$this->calculate($activity,$activityVO);
			$activityVO->partnerCount=$this->getPartnerCount($activity);
			array_push($activityVOList,$activityVO);
		}



		return $activityVOList;
	}

	public function getActivities(){
		$activityList=$this->data->getActivities();


		$activityVOList=[];

		foreach($activityList as $activity){
			if(DateTool::isPast($activity->endTime))
				continue;

			$activityVO=new ActivityVO();
			$this->calculate($activity,$activityVO);
			$activityVO->partnerCount=$this->getPartnerCount($activity);
			array_push($activityVOList,$activityVO);
		}



		return $activityVOList;
	}


	public function getActivity($activityId){
		$activity=$this->data->getActivity($activityId);
		$activityVO=new ActivityDetailVO();
		$this->calculate($activity,$activityVO);

		$activityVO->partnerList=array();
		//添加创建者
		array_push($activityVO->partnerList,$activity->publisher);
		//获取参与者列表
		$partnerRelations=$this->partnerBl->getPartner($activity->id);

		foreach($partnerRelations as $partnerRelation){

			array_push($activityVO->partnerList,$partnerRelation->partner);

		}




		return $activityVO;
	}

	private function getPartnerCount($activity){
		$partnerList=$this->partnerBl->getPartner($activity->id);
		if($partnerList==null)
			return 1;
		$count=$partnerList->count()+1;
		return $count;
	}

	/**
	 * 若未开始，计算开始时间与现在的差
	 * 若已经开始，计算结束时间与现在的差
	 * @param $activity
	 * @param $activityVO
	 */
	private function calculate($activity,$activityVO){
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

		$activityVO->activity=$activity;
		$activityVO->isBegin=$isBegin;
		$activityVO->day=$result['day'];
		$activityVO->hour=$result['hour'];
	}
}