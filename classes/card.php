<?php

class Card {

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

  /**
   * The constructor for the Card class.
   *
   * @param int $suit
   *   The suit of the card.
   *
   * @param int $value
   *   The value of the card.
   */
  public function __construct($suit = JOKER, $value = 1) {
    $this->suit = $suit;
    $this->value = $value;
  }

  /**
   * Returns the suit for the object.
   *
   * @return int
   *   Returns either SPADES, HEARTS, DIAMONDS,
   *   CLUBS, or JOKER in integer format.
   */
  public function getSuit() {
    return $this->suit;
  }

  /**
   * Returns the value for the object.
   *
   * @return int
   *   Returns ACE, JACK, QUEEN, or KING
   *   in integer format.
   */
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
      case SPADES: return 'Spades';
      case HEARTS: return 'Hearts';
      case DIAMONDS: return 'Diamonds';
      case CLUBS: return 'Clubs';
      default: return 'Joker';
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
