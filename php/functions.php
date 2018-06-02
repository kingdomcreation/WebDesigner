<?php defined('PHP_') OR die('Locking direct access to script'); 

function slug(){
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
}

function index($data){
  if( isset($_GET['json']) ){
      return json($data);
  }
  extract($data);
  echo '<!DOCTYPE html><html lang="en"><head>';
  include('php/header.php');
  echo '</head><body>';
  echo '<div class="container">';
  include('php/index.php');
  echo '</div>';
  include('php/footer.php');
  echo '</body></html>';
}

function json($data){
    if(!headers_sent()){
        header('Content-Type: application/json');
    }
    return json_encode($data);
}

function debug(){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    define('DEBUG',TRUE);
}
