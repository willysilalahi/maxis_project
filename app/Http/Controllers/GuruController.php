<?php

namespace App\Http\Controllers;

use App\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index()
    {
        $guru = GuruModel::latest()->get();
        return view('guru/index', compact('guru'));
    }

    function addGuru(GuruRequest $request)
    {
        GuruModel::create([
            'nama'       => request('nama'),
            'email'    => request('email'),
            'tempat_lahir'    => request('tempat_lahir'),
            'tanggal_lahir'    => request('tanggal_lahir'),
            'agama'            => request('agama'),
            'photo'            => request('photo'),
            'handphone'            => request('handphone'),
            'alamat'           => request('alamat'),
        ]);
    }


    function editGuru($id)
    {
        $guru = GuruModel::findOrFail($id);
        return view('guru.edit_guru', compact('Guru'));
    }


    function updateGuru(GuruRequest $request, $id)
    {
        $data_guru = [
            'nama_depan'    => request('nama_depan'),
            'nama_belakang'    => request('nama_belakang'),
            'jenis_kelamin'    => request('jenis_kelamin'),
            'agama'    => request('agama'),
            'alamat'    => request('alamat')
        ];

        GuruModel::whereId($id)->update($data_guru);
    }

    function deleteGuru($id)
    {
        $guru = GuruModel::findOrFail($id);
        $guru->delete();
    }
}
