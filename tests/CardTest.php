<?php

class CardTest extends PHPUnit_Framework_TestCase {
    public function testCanBeNegated() {
        $card = new Card(SPADES, KING);
        $card->getSuit();
        $card->getValue();
    }
}
