<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrestasiKeteranganController extends Controller
{

    public function index()
    {
        return view('dashboard.admin.keteranganPrestasi');
    }

    public function delete($id)
    {
        DB::table('ket_prestasi')->where('id', $id)->delete();
        return redirect()->back()->with(['message' => "Sukses delete user"]);
    }
    public function create(Request $request)
    {
        DB::table('ket_prestasi')->insert([
            'nama' => $request->nama,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'juara' => $request->juara,
            'tahun' => $request->tahun,
            'tingkat' => $request->tingkat

        ]);

        return redirect()->back()->with('message', 'Sukses Menambah Ekstrakurikuler');
    }

    public function edit(Request $request, $id)
    {
        DB::table('ket_prestasi')->where('id', $id)->update([
            'nama' => $request->nama,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'juara' => $request->juara,
            'tahun' => $request->tahun,
            'tingkat' => $request->tingkat

        ]);

        return redirect()->back()->with('message', 'sukses edit Ekstrakurikuler');
    }
}
