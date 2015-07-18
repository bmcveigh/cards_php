<?php

class Hand {

  private $hand;

  public function __construct() {
  	$this->hand = array();
  }

  public function setHand($hand) {
    $this->hand = $hand;
  }

}
