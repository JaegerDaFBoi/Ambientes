<?php

class Environment extends Model
{

  public $id;
  public $name;
  public $type;
  public $capacity;

  public function __construct($name,$type,$capacity)
  {
    
    parent::__construct();
    $this->name = $name;
    $this->type = $type;
    $this->capacity = $capacity;
    
  }

}