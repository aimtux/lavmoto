<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 10)->unique();
            $table->string('tahun', 4);
            $table->string('merk', 20);
            $table->enum('jenis', ['Standar', 'Matic', 'Sport']);
            $table->string('ukuran_cc', 5);
            $table->string('warna', 50);
            $table->integer('harga');
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
        Schema::drop('motor');
    }
}
