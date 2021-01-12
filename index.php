<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
	
	//Chama a classe Page, onde estáo  header, o templete index e o footer
	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>