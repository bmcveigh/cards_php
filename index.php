<?php

/**
 * @file
 *
 * This is the launching point for the card library.
 */

require_once 'includes/bootstrap.inc';

$deck = new Deck();
$deck->shuffleCards();
