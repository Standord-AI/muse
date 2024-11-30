<?php

namespace App\Controllers;

use PDO;
use Kaviru\MuseCore\Database;
use Kaviru\MuseCore\Controller;
use Kaviru\MuseCore\DataHandling;
use Kaviru\MuseCore\ErrorHandling;

class PublicController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        echo "Hello World";
        // view('index.php');
    }

    public function contact()
    {
        $data = new DataHandling;

        view('contact.php');
    }
}