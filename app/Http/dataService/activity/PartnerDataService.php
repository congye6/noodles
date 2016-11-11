<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-11
 * Time: 20:25
 */

namespace App\Http\dataService\activity;


interface PartnerDataService{
	public function addPartner($activityId,$userName);

	public function getPartners($activityId);
}