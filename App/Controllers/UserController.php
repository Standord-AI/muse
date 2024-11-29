<?php

namespace App\Controllers;

use PDO;
use App\Database;
use Core\Controller;
use Core\DataHandling;
use Core\ErrorHandling;

class UserController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        view('user/index.php');
    }

    public function login()
    {
        $data = new DataHandling;

        view('user/login.php');
    }
}
