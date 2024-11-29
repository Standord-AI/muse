<?php

namespace App\Models;

use Core\Database;

class User extends Database
{
    public string $table_name = "users";

    public function __construct()
    {
        $this->table($this->table_name);
    }
}