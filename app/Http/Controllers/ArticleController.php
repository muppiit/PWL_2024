<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function acticles(int $id): string
    {
        return "Halaman artikel dengan ID " . $id;
    }
}
