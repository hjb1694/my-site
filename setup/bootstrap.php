<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Slim\Exception\HttpNotFoundException;
use Twig\Extension;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

function bootstrapApp(){

    $app = AppFactory::create();

    $errorHandler = function(Request $request, $exception) use ($app){
        $response = $app->getResponseFactory()->createResponse();
        if($exception instanceof HttpNotFoundException){
            return $response->withHeader("Location", "/")->withStatus(302);
        }

        $response->getBody()->write('500 Error: ' . $exception);

        return $response->withStatus(500);
    };

    $errorMiddleware = $app->addErrorMiddleware(true, true, true);
    $errorMiddleware->setDefaultErrorHandler($errorHandler);


    $twig = Twig::create(__DIR__ . "/../views", ["cache" => false, "debug" => true, "mode" => "development"]);

    $twig->addExtension(new Extension\DebugExtension());

    $app->add(TwigMiddleware::create($app, $twig));

    return $app;

}

?>