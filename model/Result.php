<?php

class Result extends Model
{

  public $id;
  public $description;
  public $competence;//Llave de tabla competencias

  public function __construct()
  {
    
    parent::__construct();
  }
}