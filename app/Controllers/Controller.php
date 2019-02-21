<?php

namespace App\Controllers;

use Core\Http\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return $this->render('index', ['var' => 'somew']);
    }
}
