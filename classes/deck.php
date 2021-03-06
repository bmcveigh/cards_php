<?php

/**
 * @file
 * This file represents the Deck class, which contains all of the
 * Card objects.
 */
class Deck {
  /**
   * An array of 52 or 54 cards. A 54-card deck contains two Jokers,
   * in addition to the 52 cards of a regular poker deck.
   */
  private $deck;

  /**
   * Keeps track of the number of cards that have been dealt from
   * the deck so far.
   */
  private $cardsUsed;

  /**
   * The constructor for the Deck class.
   *
   * @param boolean $includeJokers
   *   TRUE if jokers should be included and FALSE if not.
   *   This is an optional parameter.
   */
  public function __construct($includeJokers = FALSE) {
    $cardCount = 0;

    for ($suit = 0; $suit <= 3; $suit++) {
      for ($value = 1; $value <= 13; $value++) {
        $this->deck[$cardCount++] = new Card($value, $suit);
      }
    }

    if ($includeJokers) {
      $this->deck[] = new Card(1, Card::JOKER);
      $this->deck[] = new Card(2, Card::JOKER);
    }
    $this->cardsUsed = 0;
  }

  /**
   * Shuffles the array of cards into a random order.
   */
  public function shuffleDeck() {
    shuffle($this->deck);
  }

  /**
   * As cards are dealt from the deck, the number of cards left
   * decreases. This function returns the number of cards that
   * are still left in the deck. The return value would be
   * 52 or 54 (depending on whether the deck includes Jokers)
   * when the deck is first created or after the deck has been
   * shuffled. It decreases by 1 each time the dealCard() function
   * is called.
   *
   * @return int
   *   The number of cards left.
   *
   */
  public function cardsLeft() {
    return count($this->deck) - $this->cardsUsed;
  }

  /**
   * Gets a Card object from the deck, removes it from the array,
   * and returns the object.
   *
   * @return Card
   *   The last Card object in the deck array.
   */
  public function dealCard() {
    if ($this->cardsUsed === count($this->deck) || empty($this->deck)) {
      print 'No cards are left in the deck.\n';
    }
    else {
      $this->cardsUsed++;
      return array_pop($this->deck);
    }
  }
}
