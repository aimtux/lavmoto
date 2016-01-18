@extends('layouts.table')
@section('content')
	<div class="container">

	    <div class="row">
	        <div class="col-sm-12">
	            <h4 class="page-title">Datatable</h4>
	            <ol class="breadcrumb">
	                <li>
	                    <a href="#">Lavmoto</a>
	                </li>
	                <li>
	                    <a href="#">Tables</a>
	                </li>
	                <li class="active">
	                    Data Transaksi
	                </li>
	            </ol>
	        </div>
	    </div>

        <div class="col-lg-8">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Detail Transaksi | {{ $transaksi->debitur->nama }}</b></h4>            
            <div class="p-20">
                <table class="table table-striped m-0">
                    <tbody>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Motor</th>
                        </tr>

                        <tr>
                           <td><a href="{{ route('admin.debitur.transaksi.show', [$transaksi->debitur->id, $transaksi->id]) }}">{{ $transaksi->kode }}</a></td>
                           <td><a href="{{ route('admin.debitur.show', [$transaksi->debitur->id] ) }}">{{ $transaksi->debitur->nama }}</a></td>
                           <td><a href="{{ route('admin.motor.show', [$transaksi->motor->id] ) }}">{{ $transaksi->motor->merk }}</a></td>
                        </tr>
                        
                        <tr>
                            <th>Uang Muka</th>
                            <th>Tempo</th>
                            <th>Angsuran</th>
                        </tr>

                        <tr>
                           <td>Rp {{ number_format($transaksi->uangmuka) }}</td>
                           <td>{{ $transaksi->tempo }} Bulan</td>
                           <td>Rp {{ number_format($transaksi->angsuran) }}</td>
                        </tr>

                        <tr>
                            <th>No. Polisi</th>
                            <th>No. Mesin</th>
                            <th>No. Rangka</th>
                        </tr>

                        <tr>
                            <td>{{ $transaksi->no_polisi }}</td>
                           <td>{{ $transaksi->no_mesin }}</td>
                           <td>{{ $transaksi->no_rangka }}</td>
                        </tr>

                       {{--  <tr>
                            <th>Sisa Angsuran</th>
                        </tr>

                        <tr>
                            <td>{{ $sisa }}</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        @if ($tempo <= $transaksi->tempo)
        <div class="col-lg-4">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Form Angsuran</b></h4>            
            <div class="p-20">
                {!! Form::open(['method' => 'POST', 'url' => 'admin/angsuran/'. $transaksi->kode, 'class' => 'form-horizontal']) !!}
                
                    <div class="form-group @if($errors->first('kode')) has-error @endif">
                        {!! Form::label('kode', 'Kode Transaksi*') !!}
                        {!! Form::text('kode', $transaksi->kode, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']) !!}
                        <small class="text-danger">{{ $errors->first('kode') }}</small>
                    </div>

                    <div class="form-group @if($errors->first('angsuran_ke')) has-error @endif">
                        {!! Form::label('angsuran_ke', 'Angsuran Ke*') !!}
                        {!! Form::text('angsuran_ke', $tempo, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly','data-parsley-id' => 2, 'parsley-trigegr' => 'change']) !!}
                        <small class="text-danger">{{ $errors->first('angsuran_ke') }}</small>
                    </div>

                    <div class="form-group @if($errors->first('tunai')) has-error @endif">
                        {!! Form::label('tunai', 'Uang Tunai Angsuran*') !!}
                        {!! Form::text('tunai', $transaksi->angsuran, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly', 'data-parsley-id' => 3, 'parsley-trigegr' => 'change']) !!}
                        <small class="text-danger">{{ $errors->first('tunai') }}</small>
                    </div>
                
                    <div class="btn-group pull-right">
                        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                    </div>
                
                {!! Form::close() !!}
            </div>
            </div>
        </div>
        @else
            <div class="col-lg-4">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Status Angsuran</b></h4>            
            <div class="p-20">
                <h1>Lunas</h1>
            </div>
            </div>
        </div>
        @endif

        <div class="col-sm-12">
            <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Data Angsuran</b></h4>   
            <div class="p-20">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Angsuran Ke</th>
                            <th>Tunai</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach ($angsuran as $data)
                    {{-- */$x++;/* --}}
                        <tr>
                            <td>{{ $x }}</td>
                            <td>{{ $data->kode }}</td>
                            <td>Ke-{{ $data->angsuran_ke }} </td>
                            <td>Rp {{ number_format($data->tunai) }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                 <a href="{{ URL('admin/angsuran/'.$data->kode.'/print') }}">
                                        <button class="btn btn-icon waves-effect waves-light btn-success" >
                                            <i class="fa fa-print">Print</i>
                                        </button>
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>

	</div>
@stop