<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Debitur;
use App\Models\Motor;
use App\Models\Angsuran;

use Auth;
use DB;
use App\User;
use Illuminate\Http\Request;

use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $debitur = Debitur::findOrFail($id);
        $options = [12 => '12 Bulan', 24 => '24 Bulan', 36 => '36 Bulan'];
        $motor = Motor::lists('merk', 'id');
        $penyerah = Auth::user()->name;
        $kode = 'LV'.date('Ymd').rand(0,999);     
        return view ('transaksi.create', compact('debitur', 'options', 'kode', 'motor', 'penyerah', 'kode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $idmotor = $request->input('motor_id');
        $motor = Motor::find($idmotor);
        $input = $request->all();
        $input = [
            'kode' => $request->input('kode'),
            'debitur_id' => $request->input('debitur_id'),
            'motor_id' => $request->input('motor_id'),
            'uangmuka' => $request->input('uangmuka'),
            'tempo' => $request->input('tempo'),
            'angsuran' => ($motor->harga - $request->input('uangmuka'))/ $request->input('tempo'),
            'no_polisi' => $request->input('no_polisi'),
            'no_mesin' => $request->input('no_mesin'),
            'no_rangka' => $request->input('no_rangka'),
            'penyerah' => $request->input('penyerah'),
            'penerima' => $request->input('penerima')
        ];
        Transaksi::create($input);
        return redirect('admin/debitur/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $idtransaksi)
    {
        $debitur = Debitur::findOrFail($id);
        $transaksi = Transaksi::findOrFail($idtransaksi);
        $angsuran = Angsuran::where('kode', $transaksi->kode)->orderBy('created_at','desc')->get();
        $data = Angsuran::where('kode', $transaksi->kode)->count();
        $tempo = $data + 1;
        return view ('transaksi.show', compact('debitur', 'transaksi', 'angsuran', 'tempo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idtransaksi)
    {
       $debitur = Debitur::findOrFail($id);
       $transaksi = Transaksi::findOrFail($idtransaksi);
       $options = [12 => '12 Bulan', 24 => '24 Bulan', 36 => '36 Bulan'];
       $motor = Motor::lists('merk', 'id');
       $penyerah = Auth::user()->name;
       return view ('transaksi.edit', compact('debitur', 'transaksi', 'options', 'motor', 'penyerah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $idtransaksi)
    {
        $debitur = Debitur::findOrFail($id);
        $transaksi = Transaksi::findOrFail($idtransaksi);
        $idmotor = $request->input('motor_id');
        $motor = Motor::findOrFail($idmotor);
        $input = $request->all();
        $input = [
            'kode' => $request->input('kode'),
            'debitur_id' => $request->input('debitur_id'),
            'motor_id' => $request->input('motor_id'),
            'uangmuka' => $request->input('uangmuka'),
            'tempo' => $request->input('tempo'),
            'angsuran' => ($motor->harga - $request->input('uangmuka'))/ $request->input('tempo'),
            'no_polisi' => $request->input('no_polisi'),
            'no_mesin' => $request->input('no_mesin'),
            'no_rangka' => $request->input('no_rangka'),
            'penyerah' => $request->input('penyerah'),
            'penerima' => $request->input('penerima')
        ];
        $transaksi->update($input);
        return redirect('admin/debitur/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $idtransaksi)
    {
        Transaksi::findOrFail($idtransaksi)->delete();
        return redirect('admin/debitur/'.$id);
    }
}
