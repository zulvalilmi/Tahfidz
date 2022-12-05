<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tahfidz'  ,
        'jurusan_id'    ,
        'surat_ziyadah' ,
        'ayat_ziyadah'  ,
        'surat_murojaah',
        'ayat_murojaah' ,
        'foto'          ,
        'keterangan'    ,
    ];

    
}
