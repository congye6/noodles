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
		else{
			//不存在当天数据,查找最近数据,history已经按日期排好序
			$infos=$historyData=$this->getHistoryData($userName);
			if(count($infos)==0)
				return new TodayBodyVO();
			$info=$infos[0];
		}



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
		if(count($historyData)==0)
			return [];

		$statisticList=array();

		$dataArray=array();


		$dates=array();
		foreach($historyData as $data){
			array_push($dates,$data->date);
			array_push($dataArray,$data);
		}
		array_multisort($dates,SORT_DESC,SORT_STRING,$dataArray,SORT_DESC,SORT_STRING);


		foreach ($dataArray as $info){
			$gap=$info->goal-$info->weight;

			$bodyStatisticVO=new BodyStatisticVO($info->weight,$info->updated_at,true,0,$gap);
			array_push($statisticList,$bodyStatisticVO);

			//最多返回五条历史数据
			if(count($statisticList)>=5)
				break;
		}

		//计算变化率
		for($i=0;$i<count($statisticList)-1;$i++){
			$isIncrease=true;
			$change=$statisticList[$i]->weight-$statisticList[$i+1]->weight;

			//体重下降
			if($change<0){
				$isIncrease=false;
				$change=-$change;
			}
			//变化率，进一法取整
			$rate=ceil($change/$statisticList[$i+1]->weight/100.0);
			$statisticList[$i]->isIncrease=$isIncrease;
			$statisticList[$i]->rate=$rate;
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
		$result=new BodyVO(null,$info->weight,0,$info->goal);
		$result->date=$info->date;

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