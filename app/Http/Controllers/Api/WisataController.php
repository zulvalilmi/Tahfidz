<?php

namespace App\Http\Controllers\Api;

use App\Charts\WisataChart;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class WisataController extends Controller
{
    public function chart()
    {
        // $ilmi   = collect(Http::get('http://ict-juara.herokuapp.com/api/wisata')->json());
        $ilmi   = Http::get('http://ict-juara.herokuapp.com/api/wisata');
        $zulva  = json_decode($ilmi);
        
        
        $labels = Arr::pluck($zulva->data, 'nama_wisata');
        $data   = Arr::pluck($zulva->data, 'harga');
        // $color  = $zulva->data->map(function($item){
        //         return '#' . substr(md5(mt_rand()), 0, 6);
        // });
        // dd($labels, $data);

        $chart  =   new WisataChart;
        $chart->labels($labels);
        $chart->dataset('Data Wisata', 'doughnut', $data)->backgroundColor('#' . substr(md5(mt_rand()), 0, 6));

        return view('chart.wisata', [
            'chart' =>  $chart,
        ]);

       
    }
    
    public function chart2()
    {
        $ilmi   = Http::get('http://ict-juara.herokuapp.com/api/wisata');
        $zulva  = json_decode($ilmi);

        $nama_wisata = [];
        $harga = [];

        foreach($zulva->data as $row){
            $nama_wisata[] = $row->nama_wisata;
            $harga[] = $row->harga;
        }

       $n = json_encode($nama_wisata);
       $h = json_encode($harga);

        return view('chart.wisata2',[
            'n' => $n,
            'h' => $h,
        ]);
    }

    public function chartuser()
    {

        $users  =   User::all();
        $data   =   json_decode($users);

        $tgl = [];
        $orang = [];

        foreach($data as $row){
            $tgl[]    =   Carbon::parse($row->created_at)->translatedFormat('d F Y');
            $orang[]  =   $row->id;
        }

        return view('chart.users',compact(
            'tgl',           
            'orang'
        ));
    }
}
