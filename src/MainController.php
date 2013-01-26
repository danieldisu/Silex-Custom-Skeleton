<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



$app->get('/', function () use ($app) {
	return $app['twig']->render('index.html.twig', array());
})
->bind('homepage');

$app->get('/blog', function() use($app){
	$response = new RedirectResponse('http://www.danieldisu.es/blog');
	return $response;
})->bind('blog');

$app->get('/resume', function() use($app){
	return $app['twig']->render('resume.html.twig',array());
})->bind('resume');

$app->get('/about', function() use($app){
	return $app['twig']->render('about.html.twig',array());
})->bind('about');

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
	return;
    }

	$page = 404 == $code ? '404.html.twig' : '500.html.twig';

	return new Response($app['twig']->render($page, array('code' => $code)), $code);
});

