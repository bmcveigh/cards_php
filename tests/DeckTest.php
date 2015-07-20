<?php

class DeckTest extends PHPUnit_Framework_TestCase {
    public function testCanBeNegated() {
	  $deck = new Deck();
	  $deck->shuffleDeck();
    }
}
