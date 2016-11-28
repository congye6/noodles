<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-11-28
 * Time: 13:59
 */

namespace App\Http\vo;
class SleepViewVO{
    public $sleepHour;
    public $sleepMinute;

    public $deepSleepHour;
    public $deepSleepMinute;

    public $lightSleepHour;
    public $lightSleepMinute;

    public $bedTime;

	public $deepSleepRate;

	public $date;

    public function __construct($sleep=0,$deepSleep=0,$lightSleep=0,$bedTime,$deepSleepRate=0,$date=null){
        $this->sleepHour=intval($sleep/60);
        $this->sleepMinute=$sleep%60;

        $this->deepSleepHour=intval($deepSleep/60);
        $this->deepSleepMinute=$deepSleep%60;

        $this->lightSleepHour=intval($lightSleep/60);
        $this->lightSleepMinute=$lightSleep%60;

        $this->bedTime=$bedTime;

	    $this->deepSleepRate=$deepSleepRate;
	    $this->date=$date;
    }
}