<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class HomeController
{
    public function index()
    {

        $users = (new User())->all();

        return View::render('home', compact('users'));

    }
}