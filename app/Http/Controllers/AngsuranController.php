<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Angsuran;
use Illuminate\Http\Request;

use PDF;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AngsuranController extends Controller
{
	public function findData(){
		return view ('angsuran.cari');
	}

    public function putKode(Request $request){
        $kode = $request->input('search');
        return redirect('admin/angsuran/'. $kode);
    }

    public function showData($id){
    	$transaksi = Transaksi::where('kode', $id)->firstOrFail();
    	$angsuran = Angsuran::where('kode', $id)->orderBy('created_at','desc')->get();
        $data = Angsuran::where('kode', $id)->count();
        $tempo = $data + 1;
        $totalangsur = Angsuran::where('kode', $id)->sum('tunai');
        $sisa = ($transaksi->motor->harga - $transaksi->uangmuka) - $totalangsur;
    	return view ('angsuran.show', compact('transaksi', 'angsuran', 'tempo', 'sisa'));
    }

    public function storeData(Request $request, $id){
    	$input = [
    			'kode' => $request->input('kode'),
    			'angsuran_ke' => $request->input('angsuran_ke'),
    			'tunai' => $request->input('tunai')
    		];
    	Angsuran::create($input);
    	$transaksi = Transaksi::where('kode', $request->input('kode'))->firstOrFail();
    	$angsuran = Angsuran::where('kode', $request->input('kode'))->get();
    	return redirect('admin/angsuran/'. $id);
    }

    public function printData($id){
        $transaksi = Transaksi::where('kode', $id)->firstOrFail();
        $angsuran = Angsuran::where('kode', $id)->orderBy('created_at', 'desc')->firstOrFail();
        $pdf = PDF::loadView('laporan.index', compact('angsuran', 'transaksi'));
        return $pdf->stream();
    }

    public function deleteData($id){
        $data = Angsuran::findOrFail($id);
        $kode = $data->kode;
        $data->delete();
        return redirect('admin/angsuran/'. $kode);
    }


}
