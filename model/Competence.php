<?php

class Competence extends Model
{
  
  public $id;
  public $code;
  public $description;
  public $weekhours;
  public $program;//Llave de tabla programas
  
  public function __construct($code, $description, $weekhours, $program)
  {
    parent::__construct();
    $this->code = $code;
    $this->description = $description;
    $this->weekhours = $weekhours;
    $this->program = $program;
  }

  public function saveCompetence()
  {
    try {
      $sql = "INSERT INTO competencias (codigo, descripcion, horassemanales, idprograma) VALUES (:codigo, :descripcion, :horassemanales, :idprograma)";
      $query = $this->connection->prepare($sql);
      $query->execute([":codigo"=>$this->code, ":descripcion"=>$this->description, ":horassemanales"=>$this->weekhours, ":idprograma"=>$this->program]);
    } catch (PDOException $e) {
      die("Error al ingresar datos: ".$e->getMessage());
    }
  }

  public function showTable()
  {
    try {
      $sql = $this->connection->query("SELECT competencias.id, competencias.codigo, competencias.descripcion, competencias.horassemanales, programas.nombre AS programaformacion FROM competencias INNER JOIN programas ON competencias.idprograma = programas.id");
      $competences = $sql->fetchAll(PDO::FETCH_OBJ);
      return $competences;
    } catch (PDOException $e) {
      die("Error al traer datos: ".$e->getMessage());
    }
  }

  
}