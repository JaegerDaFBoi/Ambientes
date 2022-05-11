<?php

class ProgramController extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel("Program");
    $this->loadModel("Competence");
  }

  public function index()
  {
    $program = new Program("", "", "", "", "", "", "", "");
    $programs = $program->showTable();
    $this->view->programs = $programs;
    $this->view->show('program/list');
  }

  public function create()
  {
    $this->view->show('program/create');
  }

  public function save()
  {
    $trimesters = ($_POST['programSchoolStageTime'] + $_POST['programPracticalStageTime']) / 3;
    $program = new Program($_POST['programCode'], $_POST['programName'], $_POST['programSchoolStageTime'], $_POST['programPracticalStageTime'], $_POST['programFormationLevel'], $_POST['programInstructorProfile'], $trimesters, $_POST['programDescription']);
    $program->saveProgram();
    $programs = $program->showTable();
    $this->view->programs = $programs;
    $this->view->show('program/list');
  }

  public function edit()
  {
    $id = $_GET['id'];
    $program = new Program("", "", "", "", "", "", "", "");
    $program = $program->searchProgram($id);
    $this->view->program = $program;
    $this->view->show('program/edit');
  }

  public function update()
  {
    $id = $_POST['idProgram'];
    $code = $_POST['programCode'];
    $name = $_POST['programName'];
    $schoolstagetime = $_POST['programSchoolStageTime'];
    $practicalstagetime = $_POST['programPracticalStageTime'];
    $formationlevel = $_POST['programFormationLevel'];
    $instructorprofile = $_POST['programInstructorProfile'];
    $trimesters = ($_POST['programSchoolStageTime'] + $_POST['programPracticalStageTime']) / 3;
    $description = $_POST['programDescription'];

    $program = new Program($code, $name, $schoolstagetime, $practicalstagetime, $formationlevel, $instructorprofile, $trimesters, $description);
    $program->updateProgram($id);

    $program = new Program("", "", "", "", "", "", "", "");
    $programs = $program->showTable();
    $this->view->programs = $programs;
    $this->view->show('program/list');
  }

  public function delete()
  {
    $id = $_GET['id'];
    $program = new Program("", "", "", "", "", "", "", "");
    $program = $program->searchProgram($id);
    $this->view->program = $program;
    $this->view->show('program/delete');
  }

  public function confirmDelete()
  {
    $id = $_POST['idProgram'];
    $code = $_POST['programCode'];
    $name = $_POST['programName'];
    $schoolstagetime = $_POST['programSchoolStageTime'];
    $practicalstagetime = $_POST['programPracticalStageTime'];
    $formationlevel = $_POST['programFormationLevel'];
    $instructorprofile = $_POST['programInstructorProfile'];
    $trimesters = $_POST['programTrimesters'];
    $description = $_POST['programDescription'];

    $program = new Program($code, $name, $schoolstagetime, $practicalstagetime, $formationlevel, $instructorprofile, $trimesters, $description);
    $program->deleteProgram($id);

    $program = new Program("", "", "", "", "", "", "", "");
    $programs = $program->showTable();
    $this->view->programs = $programs;
    $this->view->show('program/list');
  }

  public function listC()
  {
    $id = $_GET['id'];
    $program = new Program("","","","","","","","");
    $program = $program->searchProgram($id);
    $this->view->program = $program;

    $competences = new Competence("","","","");
    $competences = $competences->showTable($id);
    $this->view->competences = $competences;
    $this->view->show('competence/list');
  }
}
