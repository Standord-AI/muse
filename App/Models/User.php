<?php

namespace App\Models;

use Kaviru\MuseCore\Database;

class User extends Database
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'age'];
    protected $readable = ['id', 'name', 'email', 'age', 'created_at'];
    protected $dataTypes = [
        'id' => 'int',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'age' => 'int',
        'created_at' => 'string'
    ];

    public string $name;
    public string $email;
    public string $password;
    public int $age;

    public function __construct()
    {
        parent::__construct();
    }
}
