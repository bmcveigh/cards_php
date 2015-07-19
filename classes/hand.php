<?php

class Hand {

  /**
   * The Card objects that are in the hand.
   */
  private $hand;

  /**
   * Initialize the hand variable, which will start
   * out as an empty array.
   */
  public function __construct() {
    $this->hand = array();
  }

  /**
   * Empty the hand.
   */
  public function clear() {
    // We should unset the variable first before we
    // re-initialize it because it will use less
    // memory.
    unset($this->hand);
    $this->hand = array();
  }

  /**
   * Adds a Card object to the hand array.
   *
   * @param Card $card
   *   The Card object to be added.
   *
   */
  public function addCard($card) {
    if (isset($card)) {
      $this->hand[] = $card;
    }
  }

  /**
   * Removes a card from the hand based on the suit
   * and value.
   *
   * @param int $suit
   *   The suit constant SPADES, HEARTS, DIAMONDS,
   *   CLUB, JOKER.
   *
   * @param int $value
   *   The value: 2, 3, 4, 5, 6, 7, 8, 9, 10, ACE,
   *   JACK, QUEEN, KING.
   */
  public function removeCard($suit, $value) {
    for ($i = 0; $i < count($this->hand); $i++) {
      if ($this->hand[$i]->suit === $suit && $this->hand[$i]->value === $value) {
        unset($this->hand[$i]);
        break;
      }
    }
  }

  /**
   * Remove the card in a specified position from the hand.
   * @param position the position of the card that is to be removed, where
   * positions are starting from zero.
   * @throws IllegalArgumentException if the position does not exist in
   * the hand, that is if the position is less than 0 or greater than
   * or equal to the number of cards in the hand.
   */
  // public void removeCard(int position) {
  //     if (position < 0 || position >= hand.size())
  //         throw new IllegalArgumentException("Position does not exist in hand: "
  //                 + position);
  //     hand.remove(position);
  // }

  /**
   * Gets the number of cards in the current hand.
   */
  public function getHandCount() {
    return count($this->hand);
  }
}
