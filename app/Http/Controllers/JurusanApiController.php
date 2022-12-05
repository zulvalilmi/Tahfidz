<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JurusanApiController extends Controller
{
   public function index()
   {
        return response()->json([
            'status'    => 1,
            'message'   => 'Sukses To Get Jurusan',
            'data'      => jurusan::all()
        ]);
   }

   public function add(Request $request)
   {
        $data = $request->all();
        $ilmi = [
            'jurusan'   =>  'required',
            'kelas'     =>  'required',
        ];

        $validate = Validator::make($data, $ilmi);

        if($validate->fails()){
            return $validate->errors()->all();
        }

        $jurusan = jurusan::create([
            'jurusan'   => $request->jurusan,
            'kelas'   => $request->kelas,
        ]);

        return $jurusan;
   }

   public function update(Request $request, $id)
   {
        $jurusan    =   jurusan::find($id);

        if(!$jurusan){
            return response()->json([
                'status'    => 2,
                'message'   => 'Tidak Bisa Meng-Update Jurusan',
            ]);
        }

        $validasi   = Validator::make($request->all(),[
            'jurusan'   => 'required',
            'kelas'     => 'required',
        ]);

        if($validasi->fails()){
            return $validasi->errors()->all();
        }

        $jurusan->update([
            'jurusan'   => $request->jurusan,
            'kelas'     => $request->kelas,
        ]);

        return response()->json([
                'status'    => 1,
                'message'   => 'Bisa Meng-Update Data',
                'data'   => $jurusan,
            ]);
    }

    public function delete($id)
    {
        $jurusan    = jurusan::find($id);

        $jurusan->delete();

        return response()->json([
            'status'    => 1,
            'message'   => 'Berhasil Menghapus Jurusan',
        ]);
    }
}
