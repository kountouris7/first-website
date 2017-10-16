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

new Tasks ('Monday','20:00','2hrs',false),
new Tasks ('Tuesday','20:00','2hrs',true),
new Tasks ('Wednesday', '19:00', '1hr', true)
];

