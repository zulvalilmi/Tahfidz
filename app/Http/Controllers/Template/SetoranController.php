<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setoran\SetoranRequest;
use App\Models\jurusan;
use Illuminate\Http\Request;

class SetoranController extends Controller
{
    public function index()
    {
        return view('blade.pages.setoran');
    }

    public function create()
    {
        $jurusan = jurusan::all();
        return view('blade.pages.setoran-create',[
            'jurusan' => $jurusan,
        ]);
    }

    public function store(SetoranRequest $request)
    {
        dd($request->all());
        // Setoran::create
    }
}
