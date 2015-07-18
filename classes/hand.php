<?php

class Hand {

  private $hand;
  private $player;

  public function __construct($hand) {
    parent::__construct();
    $this->hand = $hand;
  }

  public function setHand($hand) {
    $this->hand = $hand;
  }

}
