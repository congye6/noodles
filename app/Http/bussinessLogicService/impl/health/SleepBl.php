<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 11:46
 */

namespace App\Http\bussinessLogicService\impl\health;


use App\Http\bussinessLogicService\health\SleepBlService;
use App\Http\dataService\health\SleepDataService;
use App\Http\tool\DateTool;
use App\Http\vo\SleepViewVO;
use App\Http\vo\SleepVO;

class SleepBl implements SleepBlService {

    private $data;

    public function __construct(SleepDataService $data){
        $this->data=$data;
    }

    public function todaySleepInfo($userName){
        $data=$this->data->getSleepData($userName,DateTool::today());
        $sleepViewVO=new SleepViewVO($data->sleep,$data->deepSleep,$data->lightSleep,$data->bedTime);
        return $sleepViewVO;
	}

	/**
	 * 获取深度睡眠时间和浅睡眠时间
	 * @param $userName
	 * @return mixed
	 */
	public function deepOrLightSleep($userName){
        return $this->data->getSleepData($userName,DateTool::today());
	}

	/**
	 * 用于睡眠折线图
	 * @param $userName
	 * @return mixed
	 */
	public function sleepStatistic($userName){
		return $this->getHistoryData($userName);
	}

	/**
	 * 最近几天的睡眠历史
	 * 时间单位化成小时和分钟
	 * @param $userName
	 * @return mixed
	 */
	public function sleepHistory($userName){
		$historyData=$this->getHistoryData($userName);

		$result=array();

		foreach ($historyData as $sleepInfo){
			$rate=intval($sleepInfo->deepSleep*100/$sleepInfo->sleep);
			$vo=new SleepViewVO($sleepInfo->sleep,$sleepInfo->deepSleep,$sleepInfo->lightSleep,$sleepInfo->bedTime,$rate,$sleepInfo->date);
			array_push($result,$vo);
		}

		return $result;
	}


	/**
	 * 获取历史数据
	 * 最多十条
	 * @param $userName
	 * @return array
	 */
	private function getHistoryData($userName){
		$historyData=$this->data->getSleepHistory($userName);

		//最多返回十个数据
		$result=array();
		foreach ($historyData as $sleepVO){
			array_push($result,$sleepVO);
			if(count($result)>=10)
				break;
		}
		return $result;
	}

	private function createData($userName){
        for($i=0;$i<10;$i++){
            $this->data->addSleepData(new SleepVO($userName,date('Y-m-d',time()+8*3600-240*3600+$i*24*3600),480+$i,120+$i,360,'22:45'));
        }
    }
}