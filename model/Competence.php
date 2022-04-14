<?php

class Competence extends Model
{
  
  public $id;
  public $code;
  public $description;
  public $weekhours;
  public $program;//Llave de tabla programas
  
  public function __construct()
  {
    parent::__construct();
  }
}