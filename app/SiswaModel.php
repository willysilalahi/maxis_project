<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'agama',
        'alamat'
    ];
}
