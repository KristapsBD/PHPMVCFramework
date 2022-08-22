<?php 

namespace krist\phpmvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}