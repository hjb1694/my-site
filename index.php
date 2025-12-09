<?php

ob_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/setup/bootstrap.php';
require_once __DIR__ . '/router/router.php';

use Dotenv\Dotenv;

try{

    $dotEnv = Dotenv::createImmutable(__DIR__);
    $dotEnv->load();

    $app = bootstrapApp();

    applyRouter($app);

    $app->run();

}catch(Exception $e){

    echo "500: An unexpected error has occurred." . $e;
    exit(1);
    
}


?>