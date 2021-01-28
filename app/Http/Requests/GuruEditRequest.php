<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruEditRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama'  => 'required',
            'email' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'agama'  => 'required',
            'handphone'  => 'required',
            'alamat'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Silahkan isi nama',
            'email.required' => 'Silahkan isi email',
            'tempat_lahir.required' => 'Silahkan isi tempat lahir',
            'tanggal_lahir.required' => 'Silahkan isi tanggal lahir',
            'jk.required' => 'Silahkan pilih jenis kelamin',
            'agama.required' => 'Silahkan pilih agama',
            'handphone.required' => 'Silahkan isi no handphone',
            'alamat.required' => 'Silahkan isi alamat',
        ];
    }
}
