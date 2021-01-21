<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nama_depan'  => 'required|max:30',
            'nama_belakang' => 'required|max:30',
            'jenis_kelamin' => 'required',
            'agama'  => 'required',
            'alamat'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_depan.required' => 'Silahkan isi nama depan',
            'nama_depan.max' => 'Nama depan maksimal 30 karakter',
            'nama_belakang.required' => 'Silahkan isi nama belakang',
            'nama_belakang.max' => 'Nama belakang maksimal 30 karakter',
            'jenis_kelamin.required' => 'Silahkan pilih jenis kelamin',
            'agama.required' => 'Silahkan pilih agama',
            'alamat.required' => 'Silahkan isi alamat',
        ];
    }
}
