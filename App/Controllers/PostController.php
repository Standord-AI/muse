<?php

namespace App\Controllers;

use Standord\MuseCore\Controller;

class PostController extends Controller
{

    public function indexPost(int $id)
    {
        // Example response
        return print_r([
            'id' => $id,
        ]);
    }

    public function showPost(string $title, int $id)
    {
        // Example response
        return print_r([
            'title' => $title,
            'id' => $id,
        ]);
    }
}
