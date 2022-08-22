<?php

namespace krist\phpmvc\exception;

class ForbiddenException extends \Exception
{
    protected $code = 403;
    protected $message = 'You dont have permission to access this page';
}