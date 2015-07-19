<?php

/**
 * @file
 * Loads the files needed for this library.
 */

define('ROOT_DIR', getcwd());

if (file_exists(ROOT_DIR . '/classes/card.php')) {
  require_once ROOT_DIR . '/classes/card.php';
}

if (file_exists(ROOT_DIR . '/classes/hand.php')) {
  require_once ROOT_DIR . '/classes/hand.php';
}

if (file_exists(ROOT_DIR . '/classes/deck.php')) {
  require_once ROOT_DIR . '/classes/deck.php';
}
