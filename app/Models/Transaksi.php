<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
    	'kode','debitur_id', 'motor_id', 'uangmuka', 'tempo', 'angsuran',
    	'no_polisi', 'no_mesin', 'no_rangka', 
    	'penyerah', 'penerima'
    	];



    public function debitur()
    {
    	return $this->belongsTo(Debitur::class);
    }

    public function motor(){
    	return $this->belongsTo(Motor::class);
    }

    public function angsuran()
    {
    	return $this->hasMany(Angsuran::class);
    }
}
