<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-29
 * Time: 17:47
 */

namespace App\Http\vo;

/**
 * 记录参与者id与他的运动步数
 * Class PartnerActivityVO
 * @package App\Http\vo
 */
class PartnerActivityVO{
	public $step;

	public $partner;



	/**
	 * PartnerActivityVO constructor.
	 * @param $partner
	 * @param $step
	 */
	public function __construct($partner, $step){
		$this->partner = $partner;
		$this->step = $step;
	}


}