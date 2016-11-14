<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-11
 * Time: 19:56
 */

namespace App\Http\bussinessLogicService\impl\activity;


use App\Http\bussinessLogicService\activity\PartnerBlService;
use App\Http\dataService\activity\ActivityDataService;
use App\Http\dataService\activity\PartnerDataService;
use App\Http\tool\StringTool;

class PartnerBl implements PartnerBlService {

	private $data;

	private $activityData;

	public function __construct(PartnerDataService $data,ActivityDataService $activityData){
		$this->data=$data;
		$this->activityData=$activityData;
	}

	public function joinActivity($activityId,$userName){
		$isNull=StringTool::isNull($activityId)||StringTool::isNull($userName);
		if($isNull)
			return '网页异常，请刷新重试';
		//TODO 验证activityid，username是否存在


		$activityVO=$this->activityData->getActivity($activityId);
		$isPublisher=$activityVO->publisher==$userName;
		if($isPublisher)
			return '竞赛是您创建的，无需加入';

		$isPartner=$this->isInActivity($activityId,$userName);
		if($isPartner)
			return '您已经加入这个竞赛了';

		$this->data->addPartner($activityId,$userName);
		return 'true';
	}

	public function getPartner($activityId){
		return $this->data->getPartners($activityId);
	}

	public function isInActivity($activityId,$userName){
		return $this->data->getPartner($activityId,$userName)->count()>0;

	}
}