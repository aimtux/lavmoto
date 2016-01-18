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
	                    Data Motor
	                </li>
	            </ol>
	        </div>
	    </div>

		<div class="col-lg-6">
			<div class="card-box">
				
			<h4 class="m-t-0 header-title"><b>Detail Motor | {{ $motor->merk }}</b></h4>			
			<div class="p-20">
				<table class="table table-striped m-0">
					<tbody>
						<tr>
							<th scope="row">Kode</th>
							<td>{{ $motor->kode }}</td>
						</tr>
						<tr>
							<th scope="row">Tahun</th>
							<td>{{ $motor->tahun }}</td>
						</tr>
						<tr>
							<th scope="row">Merk</th>
							<td>{{ $motor->merk }}</td>
						</tr>
						<tr>
							<th scope="row">Jenis</th>
							<td>{{ $motor->jenis }}</td>
						</tr>
						<tr>
							<th scope="row">Ukuran CC</th>
							<td>{{ $motor->ukuran_cc }}</td>
						</tr>
						<tr>
							<th scope="row">Warna</th>
							<td>{{ $motor->warna }}</td>
						</tr>
						<tr>
							<th scope="row">Harga</th>
							<td>Rp {{ number_format($motor->harga) }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
@stop