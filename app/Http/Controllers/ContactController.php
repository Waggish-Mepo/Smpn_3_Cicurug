<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.KelolaContact');
    }

    public function edit(Request $request)
    {

        DB::table('contact')->where('id', $request->id)->update([
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fb' => $request->fb,
            'ig' => $request->ig,
        ]);

        return redirect()->back()->with(['message' => "Sukses edit contact"]);
    }
}
