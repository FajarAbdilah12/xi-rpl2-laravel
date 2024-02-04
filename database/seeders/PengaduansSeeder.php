<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PengaduansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nik = DB::table("masyarakats")->insertGetId([
            'nik' =>'32111155',
            'nama' => 'Fajar Abdilah',
            'username' => 'fajar',
            'password'=> substr(md5('fajar'),0,32),
            'telp' =>'085714556256',
        ]);

        DB::table('pengaduans')->insert([
            'id_pengaduan'=> random_int(1,20),
            'tgl_pengaduan' => now(),
            'nik'=> '32111155',
            'isi_laporan' => Str::random(255),
            'foto' => Str::random(255),
            'status'=> '0',
        ]);
    
        
    }
}
