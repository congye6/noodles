<?php
namespace  test;
use App\Http\bussinessLogicService\impl\user\LoginBl;
use App\Http\bussinessLogicService\user\LoginBlService;
use App\Http\dataService\impl\user\UserData;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends \TestCase{




    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample(){
        $bl=new LoginBl();
        $testResult1=$bl->login('congye6','666');
        assertTrue($testResult1==false);
    }
}
