<?php

class Instructor extends Model
{

  public $id;
  public $name;
  public $doc;
  public $area;
  public $type;
  public $vinculation;
  public $hours;
  public $email;


  public function __construct($name, $doc, $area, $type, $vinculation, $hours, $email)
  {
    parent::__construct();
    $this->name = $name;
    $this->doc = $doc;
    $this->area = $area;
    $this->type = $type;
    $this->vinculation = $vinculation;
    $this->hours = $hours;
    $this->email = $email;
  }

  public function saveInstructor()
  {
    try {
      $sql = "INSERT INTO instructores (nombre,cedula,area,tipo,vinculacion,horassemana,email) VALUES (:nombre,:cedula,:area,:tipo,:vinculacion,:horassemana,:email)";
      $query = $this->connection->prepare($sql);
      $query->execute([":nombre" => $this->name, ":cedula" => $this->doc, ":area" => $this->area, ":tipo" => $this->type, ":vinculacion" => $this->vinculation, ":horassemana" => $this->hours, ":email" => $this->email]);
    } catch (PDOException $e) {
      die("Error al guardar registro: " . $e->getMessage());
    }
  }

  public function showTable()
  {
    try {
      $sql = $this->connection->query("SELECT * FROM instructores");
      $instructors = $sql->fetchAll(PDO::FETCH_OBJ);
      return $instructors;
    } catch (PDOException $e) {
      die("Error al mostrar datos: " . $e->getMessage());
    }
  }

  public function searchInstructor()
  {
    try {
      $sql = $this->connection->query("SELECT * FROM instructores WHERE id=" . $_GET['id']);
      $instructor = $sql->fetchAll(PDO::FETCH_OBJ);
      return $instructor;
    } catch (PDOException $e) {
      die("Error al traer datos: " . $e->getMessage());
    }
  }

  public function updateInstructor($id)
  {
    try {
      $sql = "UPDATE instructores SET nombre=:nombre, cedula=:cedula, area=:area, tipo=:tipo, vinculacion=:vinculacion, horassemana=:horassemana, email=:email WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":nombre" => $this->name, ":cedula" => $this->doc, ":area" => $this->area, ":tipo" => $this->type, ":vinculacion" => $this->vinculation, ":horassemana" => $this->hours, ":email" => $this->email, ":id" => $id]);
    } catch (PDOException $e) {
      die("Error al actualizar datos: " . $e->getMessage());
    }
  }

  public function deleteInstructor($id)
  {
    try {
      $sql = "DELETE FROM instructores WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":id" => $id]);
    } catch (PDOException $e) {
      die("Error al eliminar datos: " . $e->getMessage());
    }
  }
}
