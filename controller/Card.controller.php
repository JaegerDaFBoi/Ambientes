<?php

class CardController extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel("Card");
  }

  public function index()
  {
    $card = new Card("","","","","","","","");
    $cards = $card->showTable();
    $this->view->cards = $cards;
    $this->view->show('card/list');
  }

  public function create()
  {
    $connection = new Connection();
    $this->view->connection = $connection;
    $this->view->show('card/create');
  }

  public function save()
  {
    $number = $_POST['cardNumber'];
    $program = $_POST['cardProgram'];
    $assignedtime = $_POST['cardAssignedTime'];
    $mode = $_POST['cardMode'];
    $startdate = $_POST['cardStartDate'];
    $enddate = $_POST['cardEndDate'];
    $instructor = $_POST['cardInstructor'];
    $apprentices = $_POST['cardCapacity'];

    $card = new Card($number,$program,$assignedtime,$mode,$startdate,$enddate,$instructor,$apprentices);
    $card->saveCard();
    $cards = $card->showTable();
    $this->view->cards = $cards;
    $this->view->show('card/list');
  }

  public function edit()
  {
    $card = new Card("","","","","","","","");
    $card = $card->searchCard();
    $this->view->card = $card;
    $this->view->show('card/edit');
  }

  
}