<?php

class Competence extends Model
{
  
  public $id;
  public $code;
  public $description;
  public $weekhours;
  public $program;
  
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
    try
  {
    $sql = "INSERT INTO competencias (codigo,descripcion,horassemana,fk_programa) VALUES (:codigo,:descripcion,:horassemana,:programa)";
    $query = $this->connection->prepare($sql);
    $query->execute([":codigo"=>$this->code, ":descripcion"=>$this->description,":horassemana"=>$this->weekhours,":programa"=>$this->program]);
  }
    catch(PDOException $e)
  {
    die("Error al guardar datos: ".$e->getMessage());
  }
  }

  public function showTable()
  {
    try
  {
    $sql = $this->connection->query("SELECT id, codigo, descripcion, horassemana FROM competencias");
    $competences = $sql->fetchAll(PDO::FETCH_OBJ);
    return $competences;
  }
  catch(PDOException $e)
  {
    die("Error al traer datos: ".$e->getMessage());
  }
  }

  public function searchCompetence()
  {

  }
}
