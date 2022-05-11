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
    $id = $_GET['id'];
    $program = new Program("","","","","","","","");
    $program = $program->searchProgram($id);
    $this->view->program = $program;
    $this->view->show('competence/create');
  }

  public function save()
  {
    $id = $_GET['id'];
    $code = $_POST['competenceCode'];
    $description = $_POST['competenceDescription'];
    $weekhours = $_POST['competenceHours'];
    $programid = $_POST['competenceProgramId'];

    $competence = new Competence($code,$description,$weekhours,$programid);
    $competence->saveCompetence();
    header('location: http://localhost/adsi/Ambientes/program/listc?id='.$programid);
    $program = new Program("","","","","","","","");
    $program = $program->searchProgram($programid);
    $this->view->program = $program;

    $competences = $competence->showTable($id);
    $this->view->competences = $competences;
    $this->view->show('competence/list');
  }

  public function edit($id)
  {
    
  }
}