<?php

namespace App\Controllers;

use Kaviru\MuseCore\Models\AdminModel;
use Kaviru\MuseCore\Controller;
use mysqli;

class AdminController extends Controller
{
    private function getConnection()
    {
        return new mysqli('localhost', 'root', 'root', 'muse', 3306);
    }

    public function loginGet()
    {
        view('admin_login.php');
    }

    public function loginPost()
    {

    }

    public function signupGet()
    {
        view('admin_signup.php');
    }

    public function signupPost()
    {

    }
}