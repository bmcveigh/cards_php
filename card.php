<?php

/**
 * @file
 * A library for managing a deck of cards.
 */
class Deck {
  private $cards;
  private $players;
  private $numberOfPlayers;

  public function __construct() {
  	$players = array();

    $numberOfPlayers = 4;

  	for ($i = 0; $i < $numberOfPlayers; $i++) {
  	  $players[] = new Player('Player ' . $i + 1);
  	}
  }


  public function getCards() {
  	return $this->cards;
  }

  /**
   * Shuffles the array of cards. Ideally used
   * right after creating a Deck object.
   */
  public function shuffleCards() {
  	shuffle($this->cards);
  }

  public function dealCards() {
  	$cardsPerPlayer = count($this->cards) / $this->numberOfPlayers;
  	$bookmark = 0;

  	// Create a hand object with cards for each player.
  	for ($i = 0; $i < $this->numberOfPlayers; $i++) {
  	  $items = array();

  	  for ($j = $bookmark; $j < $cardsPerPlayer; $j++) {
  	  	$items[] = $this->cards[$j];
  	  	$bookmark = $j;
  	  }

  	  $hand = new Hand($items, $this->players[$i]->getName());
  	  $this->players[$i]->setHand($hand);
  	}
  }
}


class Hand {
  private $hand;
  private $player;

  public function __construct($hand) {
    $this->hand = $hand;
  }

  public function setHand($hand) {
    $this->hand = $hand;
  }

  public function getHand() {
    return $this->hand;
  }
}


class Card {
  private $suit;
  private $value;

  public function __construct($suit, $value) {
  	$this->suit = $suit;
  	$this->value = $value;
  }

  public function getSuit() {
  	return $this->suit;
  }

  public function getValue() {
  	return $this->value;
  }
}
