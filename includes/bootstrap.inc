<?php

/**
 * @file
 * Loads the files needed for this library.
 */

define('ROOT_DIR', getcwd());

if (file_exists(ROOT_DIR . '/classes/card.php')) {
  require_once ROOT_DIR . '/classes/card.php';
}
else {
  print cards_message_generate('Error: could not load file properly.', 'error');
}

if (file_exists(ROOT_DIR . '/classes/hand.php')) {
  require_once ROOT_DIR . '/classes/hand.php';
}
else {
  print cards_message_generate('Error: could not load file properly.', 'error');
}

if (file_exists(ROOT_DIR . '/classes/deck.php')) {
  require_once ROOT_DIR . '/classes/deck.php';
}
else {
  print cards_message_generate('Error: could not load file properly.', 'error');
}
