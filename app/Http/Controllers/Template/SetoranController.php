<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setoran\SetoranRequest;
use App\Models\jurusan;
use App\Models\Setoran;
use Illuminate\Http\Request;

class SetoranController extends Controller
{
    public function index()
    {
        $setoran = Setoran::all();
        return view('blade.pages.setoran',[
            'setoran' => $setoran,
        ]);
        
        
    }

    public function create()
    {
        $jurusan = jurusan::all();
        return view('blade.pages.setoran-create',[
            'jurusan' => $jurusan,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Setoran::create([
            'nama_tahfidz'      => $request->nama_tahfidz,
            'jurusan_id'        => $request->jurusan_id,
            'surat_ziyadah'     => $request->surat_ziyadah,
            'ayat_ziyadah'      => $request->ayat_ziyadah,
            'surat_murojaah'    => $request->surat_murojaah,
            'ayat_murojaah'     => $request->ayat_murojaah,
            'foto'              => $request->file('foto')->store('img-foto'),
            'keterangan'        => $request->keterangan,
        ]);

        return redirect()->route('setoran.index')->with('OK', "Rekapan $request->nama_tahfidz Berhasil Di Simpan");
    }
}
