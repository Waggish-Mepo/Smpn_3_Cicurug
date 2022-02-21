<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.kelolaBeranda');
    }

    public function editBanner(Request $request, $id)
    {


        $file = $request->file('image');
        $thumbname = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/thumbBanner' . '/', $thumbname);

        DB::table('banners')->where('id', $id)->update([
            'image' => $thumbname,

        ]);

        return redirect()->back()->with(['message' => "Sukses edit banner"]);
    }


    public function editAbout(Request $request, $id)
    {


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumbSambutan' . '/', $thumbname);
            DB::table('sambutan')->where('id', $id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $thumbname,


            ]);
        } else {
            DB::table('sambutan')->where('id', $id)->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }




        return redirect()->back()->with(['message' => "Sukses edit banner"]);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        $thumbname = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/thumbKegiatan' . '/', $thumbname);

        DB::table('kegiatans')->insert([
            'image' => $thumbname
        ]);

        return redirect()->back()->with(['message' => "Sukses nambah kegiatan"]);
    }


    public function editActivity(Request $request, $id)
    {
        $file = $request->file('image');
        $thumbname = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/thumbKegiatan' . '/', $thumbname);

        DB::table('kegiatans')->where('id', $id)->update([
            'image' => $thumbname,

        ]);

        return redirect()->back()->with([
            'message' => "Sukses edit kegiatan"
        ]);
    }

    public function delete($id)
    {
        DB::table('kegiatans')->where('id', $id)->delete();

        return redirect()->back()->with(['message' => "Sukses delete kegiatan"]);
    }
}
