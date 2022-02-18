<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {

        $users = DB::table('users')->get();

        return view('dashboard.admin.kelolaUser', ['users'=>$users]);
    }
}
