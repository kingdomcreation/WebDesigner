<?php define('PHP_','php/'); include('php/functions.php');
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
$title="Project name";
$title = $data['title'] = $pages[$index];
?><!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('php/header.php'); ?>
  </head>
  <body>
    <div class="container">
      <?php include('php/index.php'); ?>
    </div>
    <?php include('php/footer.php'); ?>
  </body>
</html>
