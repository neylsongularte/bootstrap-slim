<?php
require('../vendor/autoload.php');
require('bootEloquent.php');

use \Slim\Views\PhpRenderer;

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);

$container = $app->getContainer();
$container['view'] = new PhpRenderer(__DIR__ . '/../views/');

$app->get('/', function($request, $response, $args) {
	return $this->view->render($response, 'hello.php', [
		'pessoas' => Pessoa::all()
	]);
});

$app->post('/pessoas', function($request, $response, $args) {
	$pessoa = new Pessoa;
	$pessoa->nome = $request->getParam('nome');
	$pessoa->save();

	return $response->withRedirect('/');
});

$app->run();
