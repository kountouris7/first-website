<?php

class Task {

  public $description;

  public $completed = false;

  public function __construct($description)
  {
       $this->description = $description; 
  }


public function complete()
{


$this->completed = false;

}
    public function isComplete() 
  {

    return $this->completed;
  }

}

$tasks =[

new Task('Go to the store'),
new Task('finish'),
new Task('clean'),
new Task('fuck you')
];

$tasks[0]->complete();

require 'index.view.php';
