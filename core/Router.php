<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;   
    }

    public function resolve()
    {
        var_dump($_SERVER);
    }
}