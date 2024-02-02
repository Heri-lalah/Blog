<?php

namespace App\Controllers;

use Core\View;

class HomeController
{
    public function index()
    {

        $users = [1,2,3];

        return View::render('home', compact('users'));

    }
}