<?php

class EnvironmentController extends Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->loadModel("Environment");
  }

  public function index()
  {
    $environment = new Environment("","","");
    $environments = $environment->showTable();
    $this->view->environments = $environments;
    $this->view->show('environment/list');
  }

  public function create()
  {
    $this->view->show('environment/create');
  }

  public function save()
  {
    $name = $_POST['environmentName'];
    $type = $_POST['environmentType'];
    $capacity = $_POST['environmentCapacity'];

    $environment = new Environment($name,$type,$capacity);
    $environment->saveEnvironment();
    $environments = $environment->showTable();
    $this->view->environments = $environments;
    $this->view->show('environment/list');
  }

  public function edit()
  {
    $environment = new Environment("","","");
    $environment =$environment->searchEnvironment();
    $this->view->environment = $environment; 
    $this->view->show('environment/edit');
  }

  public function update()
  {
    $id = $_POST['idEnvironment'];
    $name = $_POST['environmentName'];
    $type = $_POST['environmentType'];
    $capacity = $_POST['environmentCapacity'];

    $environment = new Environment($name,$type,$capacity);
    $environment->updateEnvironment($id);
    $environments = $environment->showTable();
    $this->view->environments = $environments;
    $this->view->show('environment/list');
  }

  public function delete()
  {
    $environment = new Environment("","","");
    $environment = $environment->searchEnvironment();
    $this->view->environment = $environment;
    $this->view->show('environment/delete');
  }

  public function confirmDelete()
  {
    $id = $_POST['idEnvironment'];
    $name = $_POST['environmentName'];
    $type = $_POST['environmentType'];
    $capacity = $_POST['environmentCapacity'];

    $environment = new Environment($name,$type,$capacity);
    $environment->deleteEnvironment($id);
    $environments = $environment->showTable();
    $this->view->environments = $environments;
    $this->view->show('environment/list');
  }
}