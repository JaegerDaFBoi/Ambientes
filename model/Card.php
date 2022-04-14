<?php

class Card extends Model
{

  public $id;
  public $number;
  public $program;//Llave de tabla programas
  public $assignedtime;
  public $mode;
  public $startdate;
  public $enddate;
  public $instructor;//Llave de tabla instructores
  public $apprentices;

  public function __construct()
  {
    parent::__construct();
  }
  
}