<?php
  ob_start(); // output buffering is turned on

  session_start(); // turn on sessions

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));  // show folder that contains the initialize.php
  define("PROJECT_PATH", dirname(PRIVATE_PATH));  // show the folder that contains the fold PRIVATE_PATH
  define("PUBLIC_PATH", PROJECT_PATH . '/public'); // Append public folder to project folder
  define("SHARED_PATH", PRIVATE_PATH . '/shared'); // Append shared folder to private folder

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // * define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // * define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('functions.php');  // load function.php file
  require_once('database.php'); // load database.php file
  require_once('query_functions.php'); // load query_functions.php file
  require_once('validation_functions.php'); // load validation_functions.php file



  $db = db_connect();

  $errors = [];

?>