<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaBerita');
    }

    public function create(Request $request)
    {


        $file = $request->file('image');
        $thumbname = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/thumbBerita' . '/', $thumbname);

        DB::table('beritas')->insert([
            'post_id' => Carbon::now()->timestamp,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'slug' => Str::slug($request->title, '-'),
            'body' => $request->body,
            'image' => $thumbname
        ]);

        return redirect()->back()->with('message', 'sukses nambah berita');
    }

    public function edit(Request $request, $id)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumbBerita' . '/', $thumbname);

            DB::table('beritas')->where('id', $id)->update([
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'slug' => Str::slug($request->title, '-'),
                'body' => $request->body,
                'image' => $thumbname
            ]);
        } else {
            DB::table('beritas')->where('id', $id)->update([
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'slug' => Str::slug($request->title, '-'),
                'body' => $request->body,
            ]);
        }

        return redirect()->back()->with('message', 'sukses edit berita');
    }

    public function delete($id)
    {
        DB::table('beritas')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'sukses delete berita');
    }
}
