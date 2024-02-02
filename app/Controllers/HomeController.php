<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class HomeController
{
    public function index()
    {

        var_dump((new User)->all());
        die();

        $users = [1,2,3];

        return View::render('home', compact('users'));

    }
}