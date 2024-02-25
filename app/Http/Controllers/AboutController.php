<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(): string
    {
        return "NIM : 2241720159 <br> Nama : Achmad Mufid";
    }
}
