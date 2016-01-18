<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    protected $fillable = ['kode', 'angsuran_ke', 'tunai'];


    public function transaksi()
    {
    	return $this->belongsTo(Transaksi::class);
    }
}
