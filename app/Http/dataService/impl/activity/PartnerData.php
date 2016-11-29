<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-11
 * Time: 20:39
 */

namespace App\Http\dataService\impl\activity;


use App\Http\dataService\activity\PartnerDataService;
use Illuminate\Database\Eloquent\Model;

class PartnerData extends Model  implements PartnerDataService {

	protected $table = 'Partner';

	protected $fillable = ['activityId','partner'];

	public function addPartner($activityId,$userName){
		PartnerData::create(['activityId'=>$activityId,'partner'=>$userName]);
	}

	public function getPartners($activityId){

		return PartnerData::where('activityId',$activityId)->get();
	}

	public function getPartner($activityId,$username){
		return PartnerData::where([['activityId',$activityId],['partner',$username]])->get();
	}
}