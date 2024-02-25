<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(): string
    {
        return "Selamat Datang";
    }

    public function about(): string
    {
        return "NIM : 2241720159 <br> Nama : Achmad Mufid";
    }

    public function acticles(int $id): string
    {
        return "Halaman artikel dengan ID " . $id;
    }
}
