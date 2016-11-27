<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-27
 * Time: 10:10
 */

namespace App\Http\vo;


class BodyVO{
	public $userName;

	public $date;

	public $weight;

	public $height;

	public $goal;



    /**
     * BodyVO constructor.
     * @param $userName
     * @param $weight
     * @param $height
     * @param $goal
     */
    public function __construct($userName=null, $weight=0, $height=0, $goal=0){
        $this->userName = $userName;
        $this->weight = $weight;
        $this->height = $height;
        $this->goal = $goal;
    }


}