<?php

namespace App\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        $this->view('admin/dashboard');
    }

    public function avocats()
    {
        $this->view('admin/avocats');
    }

    public function huissiers()
    {
        $this->view('admin/huissiers');
    }
}
