<?php

namespace App\Controllers;

use PDO;
use Standord\MuseCore\Database;
use Standord\MuseCore\Controller;
use Standord\MuseCore\DataHandling;
use Standord\MuseCore\ErrorHandling;

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
