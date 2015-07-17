<?php

/**
 * @file
 */

define('ROOT_DIR', getcwd());

if (file_exists(ROOT_DIR . '/classes.php')) {
  require_once ROOT_DIR . '/classes.php';
}
else {
  print cards_message_generate('Error: could not load file properly.', 'error');
}

/**
 * Create a message to inform the user.
 *
 * @param string $message
 *   The message to be displayed.
 *
 * @param string $type
 *   An optional parameter to display the type of message.
 *   Available types are: normal, warning, and error.
 */
function cards_message_generate($message, $type = 'normal') {
  $color = 'green';

  switch ($type) {
  	case 'warning':
  	  $color = 'orange';
  	  break;
  	case 'error':
  	  $color = 'red';
  	  break;
  	case 'normal':
  	default:
  	  $color = 'green';
  	  break;
  }

  return '<h3 style="color: ' . $color . ';">' . $message . '</h3>';
}
