<?php

use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
        	[   'id'=>1, 'kode'=>'LV20160104229','debitur_id'=>1, 'motor_id' => 1, 
                'uangmuka' => 4000000, 'tempo'=>36, 
                'no_polisi'=>'E 1111 MX', 'no_mesin' => 'HNDBD001', 'no_rangka' => 'HNDBD001', 
                'penyerah' => 'Ahmad Hakim', 'penerima' => 'Kiddie'
            ]
        ];

        DB::table('transaksi')->insert($transaksi);
    }
}
