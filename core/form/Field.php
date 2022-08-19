<?php

namespace app\core\field;

use app\core\Model;

class Field
{
    public Model $model;
    public string $attribute;

    public function __construct(\app\core\Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }
}