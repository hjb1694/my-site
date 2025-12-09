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


}

?>