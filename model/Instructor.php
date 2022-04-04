<?php

class Instructor extends Model
{

  public $name;
  public $doc;
  public $area;
  public $type;
  public $vinculation;
  public $hours;


  public function __construct($name,$doc,$area,$type,$vinculation,$hours)
  {

    $this->name = $name;
    $this->doc = $doc;
    $this->area = $area;
    $this->type = $type;
    $this->vinculation = $vinculation;
    $this->hours = $hours;

  }

  public function saveInstructor()
  {
    try {
      $sql = "INSERT INTO instructores (nombre,cedula,area,tipo,vinculacion,totalhoras) VALUES (:nombre,:cedula,:area,:tipo,:vinculacion,:totalhoras)";
      $query = $this->connection->prepare($sql);
      $query->execute([":nombre"=>$this->name, ":cedula"=>$this->doc, ":area"=>$this->area, ":tipo"=>$this->type, ":vinculacion"=>$this->vinculation, ":totalhoras"=>$this->hours]);
    } catch (PDOException $e) {
      die("Error al guardar registro: ".$e->getMessage());
    }
  }
}