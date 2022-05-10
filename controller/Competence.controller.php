<?php

class Competence extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel("Competence");
    
  }

  public function index()
  {
    $program = new Program("","","","","","","","");
    $program = $program->searchProgram();
    $this->view->program = $program;

    $competences = new Competence("","","","");
    $competences = $competences->showTable();
    $this->view->competences = $competences;
    $this->view->show('competence/list');
  }
}