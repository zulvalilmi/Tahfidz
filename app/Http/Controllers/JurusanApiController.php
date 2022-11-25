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
}
