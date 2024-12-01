<?php

namespace App\Controllers;

use App\Models\User;
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