<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaEskul');
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        $thumbname = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/thumbEskul' . '/', $thumbname);

        DB::table('ekskuls')->insert([
            'title' => $request->title,
            'image' => $thumbname
        ]);

        return redirect()->back()->with('message', 'Sukses Menambah Ekstrakurikuler');
    }

    public function edit(Request $request, $id)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumbEskul' . '/', $thumbname);

            DB::table('ekskuls')->where('id', $id)->update([
                'title' => $request->title,
                'image' => $thumbname
            ]);
        } else {
            DB::table('ekskuls')->where('id', $id)->update([
                'title' => $request->title,
            ]);
        }

        return redirect()->back()->with('message', 'sukses edit Ekstrakurikuler');
    }

    public function delete($id)
    {
        DB::table('ekskuls')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'sukses delete Ekstrakurikuler');
    }
}
