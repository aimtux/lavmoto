<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->integer('debitur_id');
            $table->integer('motor_id');
            $table->integer('uangmuka');
            $table->integer('tempo');
            $table->integer('angsuran');
            $table->string('no_polisi', 10);
            $table->string('no_mesin', 50);
            $table->string('no_rangka', 50);
            $table->string('penyerah');
            $table->string('penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksi');
    }
}
