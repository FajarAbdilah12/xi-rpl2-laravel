<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      $petugasID = DB::table("petugases")->insertGetId([
        'id_petugas'=> random_int(1,15),
        'nama_petugas'=> 'Fajar Abdilah',
        'username' => 'fajar',
        'password' => substr(md5('fajar'),0,32),
        'telp' => '085714556256',
        'level' => 'admin',
      ]);

      $pengaduanID = DB::table('pengaduans')->insertGetId([
        'id_pengaduan'=> random_int(1,15),
            'tgl_pengaduan' => now(),
             'nik'=> '32111155',
             'isi_laporan' => 'LAPORAN!!',
             'foto' => 'foto',
             'status'=> 'proses',
      ]);


      DB::table('tanggapans')->insert([
        'id_tanggapan' => random_int(1, 20),
        'id_pengaduan' => $pengaduanID,
        'tgl_tanggapan' => now(),
        'tanggapan' => Str::random(225),
        'id_petugas' => $petugasID
      ]);

    }
}
