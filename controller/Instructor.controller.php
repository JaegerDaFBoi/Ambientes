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
    $instructor = new Instructor($_POST['instructorName'], $_POST['instructorDoc'], $_POST['instructorArea'], $_POST['instructorType'], $_POST['instructorVinculation'], $_POST['instructorHours']);
    $instructor->saveInstructor();
    $this->view->show('index/initial');
  }
}