<?php

namespace App\Controllers;

use PDO;
use App\Database;
use Core\Controller;
use Core\DataHandling;
use Core\ErrorHandling;

class PublicController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        view('index.php');
    }

    public function contact()
    {
        $data = new DataHandling;

        view('contact.php');
    }
}