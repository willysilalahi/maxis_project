<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    function index()
    {

        $siswa = SiswaModel::latest()->get();
        return view('siswa/index', compact('siswa'));
    }

    function addSiswa(SiswaRequest $request)
    {
        SiswaModel::create([
            'nama_depan'       => request('nama_depan'),
            'nama_belakang'    => request('nama_belakang'),
            'jenis_kelamin'    => request('jenis_kelamin'),
            'agama'            => request('agama'),
            'alamat'           => request('alamat'),
        ]);
    }


    function editSiswa($id)
    {
        $siswa = SiswaModel::findOrFail($id);
        return view('siswa.edit_siswa', compact('siswa'));
    }


    function updateSiswa(SiswaRequest $request, $id)
    {
        $data_siswa = [
            'nama_depan'    => request('nama_depan'),
            'nama_belakang'    => request('nama_belakang'),
            'jenis_kelamin'    => request('jenis_kelamin'),
            'agama'    => request('agama'),
            'alamat'    => request('alamat')
        ];

        SiswaModel::whereId($id)->update($data_siswa);
    }

    function deleteSiswa($id)
    {
        $siswa = SiswaModel::findOrFail($id);
        $siswa->delete();
    }
}
