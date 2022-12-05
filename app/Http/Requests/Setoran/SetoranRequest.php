<?php

namespace App\Http\Requests\Setoran;

use Illuminate\Foundation\Http\FormRequest;

class SetoranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_tahfidz'      => 'required',
            'jurusan_id'           => 'required',
            'surat_ziyadah'     => 'required',
            'ayat_ziyadah'      => 'required',
            'surat_murojaah'    => 'required',
            'ayat_murojaah'     => 'required',
            'foto'              => 'required',
            'keterangan'        => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_tahfidz.required'         => 'Isi Nama Tahfidz',
            'jurusan_id.required'              => 'Pilih jurusannya yang sesuai',
            'surat_ziyadah.required'        => 'Isi Nama suratya',
            'ayat_ziyadah.required'         => 'Isi ayatnya sudah sampai mana yang terakhir',
            'surat_murojaah.required'       => 'Isi Nama surat muorajaahnya',
            'ayat_murojaah.required'        => 'Isi ayat terakhir sudah sampai mana yang terakhir',
            'foto.required'                 => 'Upload Foto Santri',
            'keterangan.required'           => 'Tuliskan Keterangan atau apa saja yang harus di perbaiki santri',

        ];
    }
}
