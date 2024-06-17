<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('nama_dokter');
        // $table->string('spesialis');
        // $table->foreignId('layanan_id');
        // $table->string('tgl_lahir');
        // $table->string('no_hp');
        // $table->string('alamat');
        // $table->timestamps();
        Dokter::create([
            'nama_dokter' => 'Bambang Saktiawan',
            'spesialis' => 'Ibu dan Anak',
            'layanan_id' =>1,
            'tgl_lahir' => '2000-05-25',
            'no_hp' => '082361187976',
            'alamat' => 'Jl. Rumah Sakit Umum No.1, Kota Medan'
        ]);

        Dokter::create([
            'nama_dokter' => 'Khairul Amali',
            'spesialis' => 'Gigi dan Mulut',
            'layanan_id' => 2,
            'tgl_lahir' => '1988-05-25',
            'no_hp' => '089635746458',
            'alamat' => 'Jl. Rumah Sakit Umum No.1, Kota Medan'
        ]);

        Dokter::create([
            'nama_dokter' => 'Mhd Ramadhan Saputra',
            'spesialis' => 'Spesialis Mata',
            'layanan_id' => 3,
            'tgl_lahir' => '1975-05-25',
            'no_hp' => '0812770909',
            'alamat' => 'Jl. Rumah Sakit Umum No.1, Kota Medan'
        ]);
    }
}
