<?php

class Program extends Model
{

  public $id;
  public $code;
  public $name;
  public $schoolstagetime;
  public $practicalstagetime;
  public $formationlevel;
  public $instructorprofile;
  public $description;

  public function __construct($code, $name, $schoolstagetime, $practicalstagetime, $formationlevel, $instructorprofile, $description)
  {
    
    parent::__construct();
    $this->code = $code;
    $this->name = $name;
    $this->schoolstagetime = $schoolstagetime;
    $this->practicalstagetime = $practicalstagetime;
    $this->formationlevel = $formationlevel;
    $this->instructorprofile = $instructorprofile;
    $this->description = $description;
    
  }

  public function saveProgram()
  {
    try {
      $sql = "INSERT INTO programas (codigo, nombre, duracionlectiva, duracionpractica, nivelformacion, perfilinstructor, descripcion) VALUES (:codigo, :nombre, :duracionlectiva, :duracionpractica, :nivelformacion, :perfilinstructor, :descripcion)";
      $query = $this->connection->prepare($sql);
      $query->execute([":codigo"=>$this->code, ":nombre"=>$this->name, ":duracionlectiva"=>$this->schoolstagetime, ":duracionpractica"=>$this->practicalstagetime, ":nivelformacion"=>$this->formationlevel, ":perfilinstructor"=>$this->instructorprofile, ":descripcion"=>$this->description]);
    } catch (PDOException $e) {
      die("Error al ingresar datos: ".$e->getMessage());
    }
  }

  public function showTable()
  {
    try {
      $sql = $this->connection->query("SELECT id, codigo, nombre, duracionlectiva, duracionpractica, nivelformacion, perfilinstructor, descripcion, ROUND((duracionlectiva+duracionpractica)/3) AS totaltrimestres FROM programas");
      $programs = $sql->fetchAll(PDO::FETCH_OBJ);
      return $programs;
    } catch (PDOException $e) {
      die("Error al traer datos: ".$e->getMessage());
    }
  }

  public function searchProgram()
  {
    try {
      $sql = $this->connection->query("SELECT * FROM programas WHERE id=".$_GET['id']);
      $program = $sql->fetchAll(PDO::FETCH_OBJ);
      return $program;
    } catch (PDOException $e) {
      die("Error al traer datos: ".$e->getMessage());
    }
  }

  public function updateProgram($id)
  {
    try {
      $sql = "UPDATE programas SET codigo=:codigo, nombre=:nombre, duracionlectiva=:duracionlectiva, duracionpractica=:duracionpractica, nivelformacion=:nivelformacion, perfilinstructor=:perfilinstructor, descripcion=:descripcion WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":codigo"=>$this->code, ":nombre"=>$this->name, ":duracionlectiva"=>$this->schoolstagetime, ":duracionpractica"=>$this->practicalstagetime, ":nivelformacion"=>$this->formationlevel, ":perfilinstructor"=>$this->instructorprofile, ":descripcion"=>$this->description, ":id"=>$id]);
    } catch (PDOException $e) {
      die("Error al actualizar datos: ".$e->getMessage());
    }
  }

  public function deleteProgram($id)
  {
    try {
      $sql = "DELETE FROM programas WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":id"=>$id]);
    } catch (PDOException $e) {
      die("Error al eliminar datos: ".$e->getMessage());
    }
  }
}