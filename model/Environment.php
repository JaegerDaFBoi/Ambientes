<?php

class Environment extends Model
{

  public $id;
  public $name;
  public $type;
  public $capacity;

  public function __construct($name,$type,$capacity)
  {
    
    parent::__construct();
    $this->name = $name;
    $this->type = $type;
    $this->capacity = $capacity;
    
  }

  public function saveEnvironment()
  {
    try {
      $sql = "INSERT INTO ambientes (nombre, tipo, aforo) VALUES (:nombre, :tipo, :aforo)";
      $query = $this->connection->prepare($sql);
      $query->execute([":nombre"=>$this->name, ":tipo"=>$this->type, ":aforo"=>$this->capacity]);
    } catch (PDOException $e) {
      die("Error al guardar datos: ".$e->getMessage());
    }
  }

  public function showTable()
  {
    try {
      $sql = $this->connection->query("SELECT * FROM ambientes");
      $environments = $sql->fetchAll(PDO::FETCH_OBJ);
      return $environments;
    } catch (PDOException $e) {
      die("Error al traer datos: ".$e->getMessage());
    }
  }

  public function searchEnvironment()
  {
    try {
      $sql = $this->connection->query("SELECT * FROM ambientes WHERE id=".$_GET['id']);
      $environment = $sql->fetchAll(PDO::FETCH_OBJ);
      return $environment;
    } catch (PDOException $e) {
      die("Error al traer datos: ".$e->getMessage());
    }
  }

  public function updateEnvironment($id)
  {
    try {
      $sql = "UPDATE ambientes SET nombre=:nombre, tipo=:tipo, aforo=:aforo WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":nombre"=>$this->name, ":tipo"=>$this->type, ":aforo"=>$this->capacity, ":id"=>$id]);
    } catch (PDOException $e) {
      die("Error al actualizar datos: ".$e->getMessage());
    }
  }

  public function deleteEnvironment($id)
  {
    try {
      $sql = "DELETE FROM ambientes WHERE id=:id";
      $query = $this->connection->prepare($sql);
      $query->execute([":id"=>$id]);
    } catch (PDOException $e) {
      die("Error al eliminar datos: ".$e->getMessage());
    }
  }
}