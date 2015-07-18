<?php

class Hand {

  private $hand;

  public function __construct($hand) {
    parent::__construct();
    $this->hand = $hand;
  }

  public function setHand($hand) {
    $this->hand = $hand;
  }

}
