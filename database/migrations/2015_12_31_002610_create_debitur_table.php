<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebiturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debitur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ktp', 30)->unique();
            $table->string('nama', 50);
            $table->date('tgl_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->string('pekerjaan', 50);
            $table->integer('penghasilan');
            $table->text('alamat');
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
        Schema::drop('debitur');
    }
}
