<?php
namespace App\Http\dataService\impl\user;
use App\Http\dataService\user\UserDataService;
use App\Http\po\UserPO;
use App\Http\tool\ObjectTool;
use Illuminate\Database\Eloquent\Model;


/**
 * Created by PhpStorm.
 * User: congye6
 * Date: 2016-11-04
 * Time: 16:31
 */
class UserData extends Model  implements UserDataService{

	protected $table = 'User';

	protected $primaryKey='userName';

	public $incrementing=false;


	protected $fillable = ['userName','password','coins'];

	public function getUser($userName){
		$user=UserData::where('userName',$userName)->first();
		return $user;
	}

	public function addUser($userVO){
		UserData::create(ObjectTool::objectToArray($userVO));
	}


}