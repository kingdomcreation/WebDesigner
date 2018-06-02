<?php defined('PHP_') OR die('Locking direct access to script'); 

function slug(){
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
}

function index($data,$include=''){
  global $index;
  if( isset($_GET['json']) ){
      return json($data);
  }
  extract($data);
  if(isset($ajax)){
      include(PHP_.$index.'.php');
  }else if($include===FALSE){
      index($data, $index);
  }else if($include==''){
      echo sprintf('<!DOCTYPE html><html lang="%s"><head><title>%s</title>',
        'en', $title);
      include(PHP_.'header.php');
      include(PHP_.'main.php');
      include(PHP_.'footer.php');
      echo '</body></html>';
  }else{
      include(PHP_.$include.'.php');
  }
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
