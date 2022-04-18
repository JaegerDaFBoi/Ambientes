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
}