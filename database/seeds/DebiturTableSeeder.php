<?php

use Illuminate\Database\Seeder;

class DebiturTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $debitur = [
        	[
                'ktp'=>'9999000000', 'nama'=>'Ahmad Hakim', 'tgl_lahir'=>'1994-08-16', 
                'jk'=>'L', 'pekerjaan'=>'Mahasiswa', 'penghasilan'=>1000000, 'alamat'=>'Sidamulya'
            ]
        ];

        DB::table('debitur')->insert($debitur);
    }
}
