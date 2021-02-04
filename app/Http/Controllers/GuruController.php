<?php

namespace App\Http\Controllers;

use App\GuruModel;
use App\User;
use App\Http\Requests\GuruRequest;
use App\Http\Requests\GuruEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    function index()
    {
        $guru = GuruModel::latest()->get();
        return view('guru/index', compact('guru'));
    }

    function addGuru(GuruRequest $request)
    {
        $photo = request('photo');
        $photo_new = time() . '-' . uniqid() . '.' .  $photo->extension();

        GuruModel::create([
            'nama'       => request('nama'),
            'email'    => request('email'),
            'jk'    => request('jk'),
            'tempat_lahir'    => request('tempat_lahir'),
            'tanggal_lahir'    => request('tanggal_lahir'),
            'agama'            => request('agama'),
            'photo'            => $photo_new,
            'handphone'            => request('handphone'),
            'alamat'           => request('alamat'),
        ]);

        User::create([
            'name' => request('nama'),
            'role' => 'guru',
            'email' => request('email'),
            'photo' => 'default.png',
            'email_verified_at' => '2021-01-21 19:53:09',
            'password' => bcrypt('rahasia123'),
            'remember_token'   => Str::random(60)
        ]);
        $photo->move('uploads/guru/', $photo_new);
    }


    function editGuru($id)
    {
        $guru = GuruModel::findOrFail($id);
        return view('guru.edit_guru', compact('guru'));
    }


    function updateGuru(GuruEditRequest $request, $id)
    {
        if (request('photo') !== null) {
            $photo = request('photo');
            $photo_new = time() . '-' . uniqid() . '.' .  $photo->extension();

            $data_guru = [
                'nama'       => request('nama'),
                'email'    => request('email'),
                'jk'    => request('jk'),
                'tempat_lahir'    => request('tempat_lahir'),
                'tanggal_lahir'    => request('tanggal_lahir'),
                'agama'            => request('agama'),
                'photo'            => $photo_new,
                'handphone'            => request('handphone'),
                'alamat'           => request('alamat'),
            ];

            $photo->move('uploads/guru/', $photo_new);
        } else {
            $data_guru = [
                'nama'       => request('nama'),
                'email'    => request('email'),
                'jk'    => request('jk'),
                'tempat_lahir'    => request('tempat_lahir'),
                'tanggal_lahir'    => request('tanggal_lahir'),
                'agama'            => request('agama'),
                'handphone'            => request('handphone'),
                'alamat'           => request('alamat'),
            ];
        }

        GuruModel::whereId($id)->update($data_guru);
    }

    function deleteGuru($id)
    {
        $guru = GuruModel::findOrFail($id);
        $guru->delete();
    }
}
