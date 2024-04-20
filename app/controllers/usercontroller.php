<?php

namespace App\Controllers;

use MVC\core\controller;
use MVC\core\session;

class UserController extends controller
{
    public function __construct()
    {
        Session::Start();
        if (Session::Get('user') == null) {
            header('location: /home/login');
        }
    }
    public function index()
    {
        echo "this is user controller";
    }
}
