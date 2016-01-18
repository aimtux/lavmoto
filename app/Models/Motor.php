<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motor';
    protected $fillable = ['kode', 'tahun', 'merk', 'jenis', 'ukuran_cc', 'warna', 'harga'];

    public function transaksi()
    {
    	return $this->hasOne(Transaksi::class);
    }
}
