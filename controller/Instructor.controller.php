<?php

class InstructorController extends Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->loadModel("Instructor");
  }

  public function index()
  {
    
    $instructor = new Instructor("","","","","","","");
    $instructors = $instructor->showTable();
    $this->view->instructors = $instructors;
    $this->view->show('instructor/list');
  }

  public function create()
  {
    $this->view->show('instructor/create');
  }

  public function save()
  {
    $instructor = new Instructor("",$_POST['instructorName'], $_POST['instructorDoc'], $_POST['instructorArea'], $_POST['instructorType'], $_POST['instructorVinculation'], $_POST['instructorHours']);
    $instructor->saveInstructor();
    $this->view->show('index/initial');
  }

  public function edit()
  {
    $instructor = new Instructor("","","","","","","");
    $instructor = $instructor->searchInstructor();
    $this->view->instructor = $instructor;
    $this->view->show('instructor/edit');
  }

  public function update()
  {
    
    $id = $_POST['idInstructor'];
    $nombre = $_POST['instructorName'] ?? "";
    $cedula = $_POST['instructorDoc'] ?? "";
    $area = $_POST['instructorArea'] ?? "";
    $tipo = $_POST['instructorType'] ?? "";
    $vinculacion = $_POST['instructorVinculation'] ?? "";
    $horas = $_POST['instructorHours'] ?? "";

    $instructor = new Instructor($id,$nombre, $cedula, $area, $tipo, $vinculacion, $horas);
    $instructor->updateInstructor($id);

    $instructor = new Instructor("","","","","","","");
    $instructors = $instructor->showTable();
    $this->view->instructors = $instructors;
    $this->view->show('instructor/list');
  }

  public function delete()
  {

    $instructor = new Instructor("","","","","","","");
    $instructor = $instructor->searchInstructor();
    $this->view->instructor = $instructor;
    $this->view->show('instructor/delete');
  }

  public function confirmDelete()
  {
    $id = $_POST['idInstructor'];
    $nombre = $_POST['instructorName'] ?? "";
    $cedula = $_POST['instructorDoc'] ?? "";
    $area = $_POST['instructorArea'] ?? "";
    $tipo = $_POST['instructorType'] ?? "";
    $vinculacion = $_POST['instructorVinculation'] ?? "";
    $horas = $_POST['instructorHours'] ?? "";

    $instructor = new Instructor($id,$nombre, $cedula, $area, $tipo, $vinculacion, $horas);
    $instructor->deleteInstructor($id);

    $instructor = new Instructor("","","","","","","");
    $instructors = $instructor->showTable();
    $this->view->instructors = $instructors;
    $this->view->show('instructor/list');
  }
}