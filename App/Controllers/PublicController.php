<?php

namespace App\Controllers;

use App\Models\User;
use PDO;
use Standord\MuseCore\Database;
use Standord\MuseCore\Controller;
use Standord\MuseCore\DataHandling;
use Standord\MuseCore\ErrorHandling;

class PublicController extends Controller
{
    public function index()
    {
        $data = new DataHandling;

        view('index.php');
    }

    public function testDatabaseCreate()
    {
        // Example usage
        $userModel = new User();

        // Create a new user
        $userModel->create([
            'name' => 'John Doe',
            'email' => 'john.doe4@example.com',
            'password' => password_hash('secret', PASSWORD_BCRYPT)
        ]);
    }
}