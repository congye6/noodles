<?php
namespace App\Http\dataService\impl\user;
use App\Http\dataService\user\UserDataService;
use App\Http\po\UserPO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

	public function getUser($userName){
		$user=UserData::where('userName',$userName)->first();
		return $user;
	}

	public function addUser($userPO){

	}
}