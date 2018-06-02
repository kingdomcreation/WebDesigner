<?php define('PHP_','php/'); include('php/functions.php');
debug();
$index = $data['url'] = slug();
$pages = [
	'index'=>'Project name',
	'about'=>'About',
	'contact'=>'Contact'
];
if( isset($pages[$index])){
	$index = $index;
}else{
	$index = 'index';
}

$title = $data['title'] = $pages[$index];
index($data);
