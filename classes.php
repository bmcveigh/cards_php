<?php

/**
 * @file
 * A library for managing a deck of cards.
 */
class Deck {

  private $cards;
  private $players;
  private $numberOfPlayers;

  public function __construct($cards = NULL, $players = NULL) {
    if (isset($cards) && isset($players)) {
      $this->cards = $cards;
      $this->players = $players;
    }
    else {
      $players = array();

      $numberOfPlayers = 4;

      for ($i = 0; $i < $numberOfPlayers; $i++) {
        $players[] = new Player('Player ' . $i + 1);
      }
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

class Hand extends Deck {

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

class Card extends Deck {

  const SPADES = 0;
  const HEARTS = 1;
  const DIAMONDS = 2;
  const CLUBS = 3;
  const JOKER = 4;
  const ACE = 1;
  const JACK = 11;
  const QUEEN = 12;
  const KING = 13;

  private $suit;
  private $value;

  public function __construct($suit = JOKER, $value = 1) {
    parent::__construct();
    $this->suit = $suit;
    $this->value = $value;
  }

  public function getSuit() {
    return $this->suit;
  }

  public function getValue() {
    return $this->value;
  }

  /**
   * Returns a String representation of the card's suit.
   *
   * @return
   *   one of the strings "Spades", "Hearts", "Diamonds", "Clubs"
   *   or "Joker".
   */
  public function getSuitAsString() {
    switch ($this->suit) {
      case SPADES: return "Spades";
      case HEARTS: return "Hearts";
      case DIAMONDS: return "Diamonds";
      case CLUBS: return "Clubs";
      default: return "Joker";
    }
  }

  /**
   * Returns a String representation of the card's value.
   *
   * @return
   *   for a regular card, one of the strings "Ace", "2",
   *   "3", ..., "10", "Jack", "Queen", or "King".  For a Joker, the
   *   string is always numerical.
   */
  public function getValueAsString() {
    if ($this->suit == JOKER) {
      return '' + $this->value;
    }
    else {
      switch ($this->value) {
        case 1: return 'Ace';
        case 2: return '2';
        case 3: return '3';
        case 4: return '4';
        case 5: return '5';
        case 6: return '6';
        case 7: return '7';
        case 8: return '8';
        case 9: return '9';
        case 10: return '10';
        case 11: return 'Jack';
        case 12: return 'Queen';
        default: return 'King';
      }
    }
  }

}

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
