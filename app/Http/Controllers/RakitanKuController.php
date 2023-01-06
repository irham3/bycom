<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RakitanKuController extends Controller
{
    public function index()
    {
        return view('rakitanku.index');
    }
}
