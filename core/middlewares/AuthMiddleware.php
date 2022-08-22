<?php 

namespace krist\phpmvc\middlewares;

use krist\phpmvc\Application;
use krist\phpmvc\exception\ForbiddenException;
use krist\phpmvc\middlewares\BaseMiddleware;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions)
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()){
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
                throw new ForbiddenException();
            }
        }
    }
}