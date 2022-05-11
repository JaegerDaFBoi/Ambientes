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
    try {
      $sql = "INSERT INTO competencias (codigo,descripcion,horassemana,fk_programa) VALUES (:codigo,:descripcion,:horassemana,:programa)";
      $query = $this->connection->prepare($sql);
      $query->execute([":codigo" => $this->code, ":descripcion" => $this->description, ":horassemana" => $this->weekhours, ":programa" => $this->program]);
    } catch (PDOException $e) {
      die("Error al guardar datos: " . $e->getMessage());
    }
  }

  public function showTable($id)
  {
    try {
      $sql = "SELECT id, codigo, descripcion, horassemana FROM competencias WHERE fk_programa=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":id"=>$id]);
      $competences = $query->fetchAll(PDO::FETCH_OBJ);
      return $competences;
      
      /*$sql = $this->connection->query("SELECT id, codigo, descripcion, horassemana FROM competencias WHERE fk_programa=".$id);
      $competences = $sql->fetchAll(PDO::FETCH_OBJ);
      return $competences;*/
    } catch (PDOException $e) {
      die("Error al traer datos: " . $e->getMessage());
    }
  }

  public function searchCompetence()
  {
    try {
      $sql = $this->connection->query("SELECT * FROM competencias WHERE id=" . $_GET['id']);
      $competence = $sql->fetchAll(PDO::FETCH_OBJ);
      return $competence;
    } catch (PDOException $e) {
      die("Error al traer datos: " . $e->getMessage());
    }
  }

  public function updateCompetence($id)
  {
    try {
      $sql = "UPDATE competencias SET codigo=:codigo, descripcion=:descripcion, horassemana=:horassemana WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":codigo"=>$this->code, ":descripcion"=>$this->description, ":horassemana"=>$this->weekhours, ":id"=>$id]);
    } catch (PDOException $e) {
      die("Error al actualizar datos: " . $e->getMessage());
    }
  }

  public function deleteCompetence($id)
  {
    try {
      $sql = "DELETE FROM competencias WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":id"=>$id]);
    } catch (PDOException $e) {
      die("Error al eliminar datos: " . $e->getMessage());
    }
  }
}
