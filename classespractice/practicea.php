<?php

class Tasks 

{
	public $day;
	public $hour;
	public $duration;
	public $take;

	public function __construct ($day,$hour,$duration,$take)

	{

		$this->day=$day;
		$this->hour=$hour;
		$this->duration=$duration;
		$this->take=$take;

     }

}

$tasks = [

new Task ('Monday','20:00','2hrs',false)





];

var_dump($tasks);