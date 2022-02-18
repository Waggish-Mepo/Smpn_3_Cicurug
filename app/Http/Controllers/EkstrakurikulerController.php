<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaEskul');
    }
}
