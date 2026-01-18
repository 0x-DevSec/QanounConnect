<?php

namespace App\Controllers;

class UserController extends Controller
{
    public function home()
    {
        $this->view('home');
    }
}
