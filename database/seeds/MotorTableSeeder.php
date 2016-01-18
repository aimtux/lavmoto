<?php

use Illuminate\Database\Seeder;

class MotorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor = [
        	['kode'=>'HNBLADE12FIR', 'tahun'=>'2015', 'merk'=>'Honda Blade 125 FI R', 'jenis'=>'Standar', 'ukuran_cc'=>'125', 'warna'=>'Hitam', 'harga'=>15850000],
            ['kode'=>'HNREVOFICW', 'tahun'=>'2015', 'merk'=>'Honda Revo FI CW', 'jenis'=>'Standar', 'ukuran_cc'=>'110', 'warna'=>'Biru', 'harga'=>14020000],
            ['kode'=>'HNSUPRAX125FICW' ,'tahun'=>'2015', 'merk'=>'Honda Supra X 125 FI CW', 'jenis'=>'Standar', 'ukuran_cc'=>'125', 'warna'=>'Merah', 'harga'=>16600000],
            ['kode'=>'HNPCSX150', 'tahun'=>'2015', 'merk'=>'Honda PCX 150', 'jenis'=>'Matic', 'ukuran_cc'=>'150', 'warna'=>'Hitam', 'harga'=>38800000],
            ['kode'=>'HNCBR150R', 'tahun'=>'2015', 'merk'=>'Honda CBR 150R', 'jenis'=>'Sport', 'ukuran_cc'=>'150', 'warna'=>'Putih', 'harga'=>28500000]

        ];

        DB::table('motor')->insert($motor);
    }
}
