<?php

use Illuminate\Database\Seeder;

class AngsuranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $angsuran = [
        	['kode'=>'LV20160104229', 'angsuran_ke'=>1, 'tunai'=>329167]
        ];

        DB::table('angsuran')->insert($angsuran);
    }
}
