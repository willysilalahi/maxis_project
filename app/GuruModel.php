<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'email',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'photo',
        'handphone',
        'alamat'
    ];
}
