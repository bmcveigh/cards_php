<?php

/**
 * @file
 * The Player class.
 */

class Player {
  private $name;
  private $hand;

  public function __construct($name) {
  	$this->name = $name;
  	$this->hand = array();
  }

  public function getName() {
  	return $this->name;
  }

  public function setHand($hand) {
  	$this->hand = $hand;
  }

  public function getHand() {
  	return $this->hand;
  }

  public function playCard() {

  }
}
