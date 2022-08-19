<?php

$app = new Application();

$router = new router();

$router->get('/', function(){
    return 'Hello world';
});

$app->useRouter($router);

$app->run();