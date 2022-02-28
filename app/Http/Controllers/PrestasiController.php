<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\KetPrestasi;



class PrestasiController extends Controller
{
    public function index()
    {

        return view('dashboard.admin.kelolaPrestasi', [
            'prestasi' => Prestasi::all(),
        ]);
    }
    public function delete($id)
    {
        Prestasi::where('id', $id)->delete();
        return redirect()->back()->with(['message' => "Sukses delete user"]);
    }
    public function create(Request $request)
    {
        $file = $request->file('image');
        $thumbname = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/thumbEskul' . '/', $thumbname);

        Prestasi::insert([
            'title' => $request->title,
            'body' => $request->body,
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

            Prestasi::where('id', $id)->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $thumbname
            ]);
        } else {
            Prestasi::where('id', $id)->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        }

        return redirect()->back()->with('message', 'sukses edit Ekstrakurikuler');
    }

    public function detail($id)
    {

        return view(
            'dashboard.admin.keteranganPrestasi',
            [
                'prestasi' => KetPrestasi::where('prestasi_id', $id)->get(),
            ]
        )->with('prestasiId', $id);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
