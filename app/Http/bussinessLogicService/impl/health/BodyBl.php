<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-27
 * Time: 10:38
 */

namespace App\Http\bussinessLogicService\impl\health;


use App\Http\bussinessLogicService\health\BodyBlService;
use App\Http\dataService\health\BodyDataService;
use App\Http\tool\DateTool;
use App\Http\vo\BodyStatisticVO;
use App\Http\vo\BodyVO;
use App\Http\vo\TodayBodyVO;

class BodyBl implements BodyBlService {

	private $data;

	public function __construct(BodyDataService $data){
		$this->data=$data;
	}

	public function getBodyInfo($userName){
		//先取当天的数据，不存在再找最近的数据

		$todayInfo=$this->data->getBodyData($userName,DateTool::today());
		$hasTodayInfo=$todayInfo->count()>0;
		if($hasTodayInfo)
			$info=$todayInfo[0];
		else
		//不存在当天数据,查找最近数据,history已经按日期排好序
			$info=$historyData=$this->getHistoryData($userName)[0];

		$result=new TodayBodyVO();
		$result->weight=$info->weight;
		$result->height=$info->height;
		$result->goal=$info->goal;
		$result->bmi=$info->weight/$info->height*50;
		$result->bmi=number_format($result->bmi,1);
		return $result;

	}

	public function getBodyHistory($userName){
		$historyData=$this->getHistoryData($userName);
		$statisticList=array();
		$lastInfo=$historyData[0];//用于进行比较变化率
		foreach ($historyData as $info){
			$isIncrease=true;
			$change=$info->weight-$lastInfo->weight;

			//体重下降
			if($change<0){
				$isIncrease=false;
				$change=-$change;
			}

			//变化率，进一法取整
			$rate=ceil($change/$lastInfo->weight/100.0);

			$gap=$info->goal-$info->weight;

			$bodyStatisticVO=new BodyStatisticVO($info->weight,$info->updated_at,$isIncrease,$rate,$gap);
			array_push($statisticList,$bodyStatisticVO);

			//最多返回五条历史数据
			if(count($statisticList)>=5)
				break;

			$lastInfo=$info;
		}

		return $statisticList;
	}

	/**
	 * 从数据层获取历史数据
	 * @param $userName
	 * @return mixed
	 */
	private function getHistoryData($userName){
		$historyInfo=$this->data->getHistoryBodyData($userName);
		return $historyInfo;
	}

	public function getBodyLineChartData($userName){
		//开始时间为7天前
		$dates=array();
		for($i=7;$i>0;$i--){
			array_push($dates,date('Y-m-d',time()+8*3600-$i*24*3600));
		}

		//获取历史数据
		$historyInfo=$this->getHistoryData($userName);
		if(count($historyInfo)==0)
			return [];

		$result=array();

		foreach($dates as $date){
			$lineChartData=[];

			//遍历查找是否有这个日期的数据
			foreach($historyInfo as $info){
				if($date==$info->date){
					$lineChartData=$info;
					break;
				}
			}

			//
			$hasData=($lineChartData!=[]);
			if(!$hasData){
				$isEmpty=(count($result)==0);
				if($isEmpty){
					$lineChartData=$this->copyBodyInfo($historyInfo[count($historyInfo)-1]);
					$lineChartData->date=$date;

				}
				else{
					$lineChartData=$this->copyBodyInfo($result[count($result)-1]);
					$lineChartData->date=$date;
					//没有数据就从前一个数据中取
				}

			}


			array_push($result,$this->copyBodyInfo($lineChartData));

		}



		return $result;
	}

	private function copyBodyInfo($info){
		$result=new BodyVO();
		$result->date=$info->date;
		$result->goal=$info->goal;
		$result->weight=$info->weight;
		return $result;
	}

	public function setBodyInfo(BodyVO $bodyVO){
		$bodyVO->date=DateTool::today();
		$bodyInfo=$this->data->getBodyData($bodyVO->userName,$bodyVO->date);

		$existInfo=$bodyInfo->count()>0;
		if($existInfo)
			$this->data->updateBodyData($bodyVO);
		else
			$this->data->addBodyData($bodyVO);
        return 'true';
	}

}