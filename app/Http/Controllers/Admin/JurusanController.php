<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    
    public function index()
    {
        $jurusan = jurusan::all();
        return view('blade.pages.jurusan',[
            'jurusan' => $jurusan,
        ]);
    }
    public function store(Request $request)
    {
        Jurusan::create([
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
        ]);

        return redirect()->back()->with('Ok','Berhasil Tambah Data !');
    }

    public function update(Request $request)
    {        
        $jurusan             = jurusan::findOrFail($request->id);

        $jurusan->jurusan    = $request->jurusan;
        $jurusan->kelas      = $request->kelas;

        $jurusan->update();

        return redirect()->back()->with('Ok','Berhasil Update Data !');
    }

    public function destroy(Request $request)
    {
        $jurusan = jurusan::findOrFail($request->id);
        $jurusan->delete();
        return redirect()->back()->with('Ok','Berhasil Delete Data !');
    }

}
