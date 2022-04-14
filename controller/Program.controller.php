<?php

class ProgramController extends Controller
{
 
  public function __construct()
  {
    parent::__construct();
    $this->loadModel("Program");
  }

  public function index()
  {
    $program = new Program("","","","","","","");
    $programs =
  }
}