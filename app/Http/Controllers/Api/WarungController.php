<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WarungController extends Controller
{
    public function warung()
    {
        $ilmi = Http::get("https://warungbangkrut14.herokuapp.com");
            dd(json_decode($ilmi));
    }
}
