<?php

class HandTest extends PHPUnit_Framework_TestCase {
    public function testCanBeNegated() {
      $hand = new Hand();

    for ($i = 0; $i < 13; $i++) {
      $hand->addCard($deck->dealCard());
    }
    print $hand->getHandCount();
    }
}
