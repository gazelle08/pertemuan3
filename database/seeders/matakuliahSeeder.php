<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            \DB::table('matakuliahs')-> insert([
                'kode_matakuliah' => 'SYS0001',
                'nama_matakuliah' => 'Pemprograman Aplikasi Bisnis',
                'sks' => 4
            ]);

            \DB::table('matakuliahs')-> insert([
                'kode_matakuliah' => 'SYS0002',
                'nama_matakuliah' => 'Audit dan Kontrol Sistem',
                'sks' => 4
            ]);

            \DB::table('matakuliahs')-> insert([
                'kode_matakuliah' => 'SYS0003',
                'nama_matakuliah' => 'Pemasaran Digital',
                'sks' => 3
            ]);
    }
}