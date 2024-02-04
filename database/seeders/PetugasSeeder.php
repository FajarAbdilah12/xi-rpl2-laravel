<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   
    DB::table("petugases")->insert([
        'id_petugas'=> 01,
        'nama_petugas'=> Str::random(35),
        'username' => Str::random(25),
        'password' => substr(md5(Str::random(32)),0,32),
        'telp' => Str::random(13),
        'level' => 'admin',
    ]);
    
 
    }
}
