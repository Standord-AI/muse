<?php

namespace App\Controllers;

use PDO;
use App\Database;
use Core\Controller;
use Core\DataHandling;
use Core\ErrorHandling;

class AdminController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        view('admin/index.php');
    }

    public function login()
    {
        $data = new DataHandling;

        view('admin/login.php');
    }
}