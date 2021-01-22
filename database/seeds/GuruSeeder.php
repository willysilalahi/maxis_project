<?php

use Illuminate\Database\Seeder;
use App\GuruModel;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuruModel::truncate();
        GuruModel::create([
            'nama' => 'Arfandi Sinaga',
            'email' => 'arfan@gmail.com',
            'jk' => 'Laki-laki',
            'tempat_lahir' => 'Perlak',
            'tanggal_lahir' => '1992-02-09',
            'agama' => 'Islam',
            'photo' => 'default.png',
            'handphone' => '08126678891',
            'alamat'    => 'Jl. Mandong Lubis, No.431, Kota Medan'
        ]);
        GuruModel::create([
            'nama' => 'Andini Nasution',
            'email' => 'andini@gmail.com',
            'jk' => 'Perempuan',
            'tempat_lahir' => 'Daun Pisang',
            'tanggal_lahir' => '1992-12-03',
            'agama' => 'Islam',
            'photo' => 'default.png',
            'handphone' => '08126678891',
            'alamat'    => 'Jl. Mandong Lubis, No.431, Kota Medan'
        ]);
        GuruModel::create([
            'nama' => 'Jamaludin Aja',
            'email' => 'jamal@gmail.com',
            'jk' => 'Laki-laki',
            'tempat_lahir' => 'Cover Bed',
            'tanggal_lahir' => '1992-01-11',
            'agama' => 'Budha',
            'photo' => 'default.png',
            'handphone' => '08126678891',
            'alamat'    => 'Jl. Mandong Lubis, No.431, Kota Medan'
        ]);
    }
}
