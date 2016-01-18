<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debitur extends Model
{
    protected $table = 'debitur';
    protected $fillable = [
    	'ktp', 'nama', 'tgl_lahir', 'jk', 
    	'pekerjaan', 'penghasilan', 'alamat'
    ];


    public function transaksi()
    {
    	return $this->HasMany(Transaksi::class);
    }
}
