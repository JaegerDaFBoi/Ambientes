<?php

class CompetenceController extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel("Competence");
    $this->loadModel("Program");
  }

  public function index()
  {

  }

  public function create()
  {
    $program = new Program("","","","","","","","");
    $program = $program->searchProgram();
    $this->view->program = $program;
    $this->view->show('competence/create');
  }

  public function save()
  {
    $code = $_POST['competenceCode'];
    $description = $_POST['competenceDescription'];
    $weekhours = $_POST['competenceHours'];
    $program = $_POST['competenceId']; 
    $competence = new Competence($code,$description,$weekhours,$program);
    $competence->saveCompetence();
    
    $competences = $competence->showTable();
    $this->view->competences = $competences;
    $this->view->show('competence/list');
  }
}