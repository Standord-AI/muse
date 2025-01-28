<?php

namespace App\Controllers;

use Standord\MuseCore\Models\AdminModel;
use Standord\MuseCore\Controller;
use mysqli;

class AdminController extends Controller
{
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
        //
    }
}