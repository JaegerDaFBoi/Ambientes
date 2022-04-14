<?php

class Trimester extends Model
{

  public $id;
  public $number;
  public $competence;//Llave de tabla 
  
  public function __construct()
  {
    
    parent::__construct();
  }
}