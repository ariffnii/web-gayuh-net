<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaPelangganController extends Controller
{
    public function index()
    {
        return view('landing-page');
    }
}
