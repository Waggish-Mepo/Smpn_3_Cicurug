<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{

    public function index()
    {

        $users = DB::table('users')->get();

        return view('dashboard.admin.kelolaUser', ['users' => $users]);
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();

        if (empty(auth()->user()->id)) {
            return redirect('/');
        } else {
            return redirect()->back()->with(['message' => "Sukses delete user"]);
        }
    }

    public function create(Request $request)
    {
        $validateData =  $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5| max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect()->back()->with(['message' => "Sukses delete user"]);
    }
}
