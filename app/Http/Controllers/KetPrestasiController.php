<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KetPrestasi;

class KetPrestasiController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.keteranganPrestasi', [
            'prestasis' => KetPrestasi::all()
        ]);
    }

    public function delete($id)
    {
        KetPrestasi::where('id', $id)->delete();
        return redirect()->back()->with(['message' => "Sukses delete user"]);
    }
    public function create(Request $request)
    {
        KetPrestasi::insert([
            'nama' => $request->nama,
            'prestasi_id' => $request->prestasi_id,
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
        DB::table('ket_prestasis')->where('id', $id)->update([
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

    public function getRouteKeyName()
    {
        return 'id';
    }

    // DB::table('ket_prestasis')->
}
