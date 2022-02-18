<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaPrestasi');
    }
}
