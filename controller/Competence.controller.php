<?php

class CompetenceController extends Controller
{

  public function __construct()
  {
    
    parent::__construct();
    $this->loadModel("Competence");
  }

  public function create()
  {
    $program = new Program("","","","","","","");
    $program = $program->searchProgram();
    $this->view->program = $program;
    $this->view->show('competence/create');
  }
}