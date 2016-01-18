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
	                    Data Debitur
	                </li>
	            </ol>
	        </div>
	    </div>
        <div class="col-lg-12">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Detail Debitur | {{ $debitur->nama }}</b></h4>            
            <div class="p-20">
                <table class="table table-striped m-0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <th>{{ $debitur->ktp }}</th>
                           <th>{{ $debitur->nama }}</th>
                           <th>{{ $debitur->tgl_lahir }}</th>
                           <th>
                               @if ($debitur->jk == 'L')
                                   Laki-laki
                                @else
                                   Perempuan
                               @endif
                           </th>
                           <th>{{ $debitur->pekerjaan }}</th>
                           <th>{{ $debitur->penghasilan }}</th>
                           <th>{{ $debitur->alamat }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

		<div class="col-sm-12">
			<div class="card-box">
			<h4 class="m-t-0 header-title"><b>Data Transaksi | {{ $debitur->nama }}</b></h4>
            <p> 
                <a href="{{ route('admin.debitur.transaksi.create', [$debitur->id]) }}"><button class="btn btn-default waves-effect waves-light">
                    <i class="fa fa-plus"></i> <span>Tambah Data</span>
                </button></a>
            </p>			
			<div class="p-20">
				<table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Motor</th>
                            <th>Tempo</th>
                            <th>Angsuran</th>
                            <th>No Polisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach ($debitur->transaksi as $data)
                    {{-- */$x++;/* --}}
                        <tr>
                            <td>{{ $x }}</td>
                            <td><a href="{{ URL('admin/motor/'. $data->motor->id) }}"> {{ $data->motor->merk }}</a></td>
                            <td>{{ $data->tempo }} Bulan</td>
                            <td>Rp {{ number_format($data->angsuran) }}</td>
                            <td>{{ $data->no_polisi }}</td>
                            <td>
                                <a href="{{ route('admin.debitur.transaksi.show', [$debitur->id, $data->id]) }}">
                                    <button class="btn btn-icon waves-effect waves-light btn-info" >
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>
                                
                                <a href="{{ route('admin.debitur.transaksi.edit', [$debitur->id, $data->id]) }}">
                                    <button class="btn btn-icon waves-effect waves-light btn-warning" >
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>

                                <button class="btn btn-icon waves-effect waves-light btn-danger" data-toggle="modal" data-target="#confModal">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
			</div>
			</div>
		</div>
	</div>

@if ($x >= 1)
    <div id="confModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                </div>
                {!! Form::open(['route' => ['admin.debitur.transaksi.destroy', $debitur->id, $data->id]]) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        
                <div class="modal-body">
                    <h4>Yakin data akan dihapus ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endif
 
@stop