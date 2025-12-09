<?php

ob_start();


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

function applyRouter($app) {

    $app->get("/", function(Request $request, Response $response){
        $view = Twig::fromRequest($request);
        return $view->render($response, 'home.page.twig');
    });


    $app->get("/portfolio", function(Request $request, Response $response){
        $view = Twig::fromRequest($request);
        return $view->render($response, 'portfolio.page.twig');
    });

    $app->get("/resume", function(Request $request, Response $response){
        $view = Twig::fromRequest($request);
        return $view->render($response, 'resume.page.twig');
    });

}

?>