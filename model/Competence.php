<?php

class Competence extends Model
{
  
  public $id;
  public $code;
  public $description;
  public $weekhours;
  public $program;
  
  public function __construct()
  {
    parent::__construct();
  }

}
