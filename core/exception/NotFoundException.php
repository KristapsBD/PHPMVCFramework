<?php

namespace krist\phpmvc\exception;

class NotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = 'This page doesnt exist';
}