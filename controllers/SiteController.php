<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    public function handleContact()
    {
        return 'Handling submitted data';
    }

    public function home()
    {
        $params = [
            'name' => "Kristaps"
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }
}