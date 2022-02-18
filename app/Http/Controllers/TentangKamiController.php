<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaTentangKami');
    }
}
