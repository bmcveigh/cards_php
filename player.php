<?php

/**
 * @file
 * The Player class.
 */

class Player {
  /**
   * The player's full name.
   */
  private $name;
  
  /**
   * The set of cards that the player gets.
   */
  private $hand;

  /**
   * Constructor for the Player class.
   *
   * @param string $name
   *   The player's name.
   *
   */
  public function __construct($name) {
  	$this->name = $name;
  	$this->hand = array();
  }

  /**
   * Get the player's name.
   *
   * @return string
   *   The player's name
   */
  public function getName() {
  	return $this->name;
  }

  /**
   * Set the hand for the player.
   *
   * @param array $hand
   *   An array of Hand objects.
   */
  public function setHand($hand) {
  	$this->hand = $hand;
  }

  /**
   * Get the hand for a player object.
   *
   * @return
   *   An array of Hand objects.
   */
  public function getHand() {
  	return $this->hand;
  }

  /**
   * Play a card for the player. This will
   * remove a card from the player's hand.
   */
  public function playCard() {

  }
}
