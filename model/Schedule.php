<?php

class Schedule extends Model
{

  public $id;
  public $instructor;//Llave de tabla instructores
  public $environment;//Llave de tabla ambiente
  public $card;//Llave de tabla ficha
  public $competence;//Llave de tabla competencia
  public $date;
  public $starthour;
  public $endhour;
  
  public function __construct()
  {
    
    parent::__construct();
  }
}