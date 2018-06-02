<?php defined('PHP_') OR die('Locking direct access to script'); 

function slug(){
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
}
