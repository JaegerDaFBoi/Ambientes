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

  public function __construct($number,$program,$assignedtime,$mode,$startdate,$enddate,$instructor,$apprentices)
  {
    parent::__construct();
    $this->number = $number;
    $this->program = $program;
    $this->assignedtime = $assignedtime;
    $this->mode = $mode;
    $this->startdate = $startdate;
    $this->enddate = $enddate;
    $this->instructor = $instructor;
    $this->apprentices = $apprentices;
  }
  
  public function saveCard()
  {
    try {
      $sql = "INSERT INTO fichas (numero, idprograma, jornada, modalidad, fechainicio, fechafin, idinstructor, cantidad) VALUES (:numero, :idprograma, :jornada, :modalidad, :fechainicio, :fechafin, :idinstructor, :cantidad)";
      $query = $this->connection->prepare($sql);
      $query->execute([":numero"=>$this->number, ":idprograma"=>$this->program, ":jornada"=>$this->assignedtime, ":modalidad"=>$this->mode, ":fechainicio"=>$this->startdate, ":fechafin"=>$this->enddate, ":idinstructor"=>$this->instructor, ":cantidad"=>$this->apprentices]);
    } catch (PDOException $e) {
      die("Error al ingresar datos: ".$e->getMessage());
    }
  }
  
  public function showTable()
  {
    try {
      $sql = $this->connection->query("SELECT fichas.id, fichas.numero, programas.nombre AS programaformacion, fichas.jornada, fichas.modalidad, fichas.fechainicio, fichas.fechafin, instructores.nombre AS nombreinstructor, fichas.cantidad FROM fichas INNER JOIN programas ON fichas.idprograma = programas.id INNER JOIN instructores ON fichas.idinstructor = instructores.id");
      $cards = $sql->fetchAll(PDO::FETCH_OBJ);
      return $cards;
    } catch (PDOException $e) {
      die("Error al traer datos: ".$e->getMessage());
    }
  }
}