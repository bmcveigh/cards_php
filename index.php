<?php

/**
 * @file
 *
 * This is the launching point for the card library.
 */

require_once 'card.php';
require_once 'player.php';

$deck = new Deck();
$deck->shuffleCards();
