<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaTentangKami');
    }

    public function editVisimisi(Request $request)
    {

        DB::table('profils')->where('id', $request->id)->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->back()->with(['message' => "Sukses edit Visi & Misi"]);
    }

    public function editSejarah(Request $request)
    {

        DB::table('profils')->where('id', $request->id)->update([
            'sejarah' => $request->sejarah,
        ]);

        return redirect()->back()->with(['message' => "Sukses edit Sejarah"]);
    }

    public function delete($id)
    {
        DB::table('teachers')->where('id', $id)->delete();

        return redirect()->back()->with(['message' => "Sukses delete Nama Guru"]);
    }

    public function editGuru(Request $request)
    {

        DB::table('teachers')->where('id', $request->id)->update([
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'gelar' => $request->gelar,
        ]);

        return redirect()->back()->with(['message' => "Sukses edit Guru"]);
    }


    public function create(Request $request)
    {

        DB::table('teachers')->insert([
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'gelar' => $request->gelar,
        ]);

        return redirect()->back()->with(['message' => "Sukses nambah kegiatan"]);
    }
}
