<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaEskul');
    }



}
