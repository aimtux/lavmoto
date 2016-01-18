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
	                    <a href="#">Pencarian</a>
	                </li>
	                <li class="active">
	                    Pencarian Data Transaksi
	                </li>
	            </ol>
	        </div>
	    </div>

		<div class="col-lg-6">
			<div class="card-box">
				
			<h4 class="m-t-0 header-title"><b>Pencarian</b></h4>			
			<div class="p-20">

			{!! Form::open(['method' => 'post', 'url' => ['admin/angsuran/'], 'class' => 'form-horizontal']) !!}
			
			    <div class="input-group">
                    <input type="text" id="example-input1-group2" name="search" class="form-control" placeholder="Inputkan Kode Transaksi">
                    <span class="input-group-btn">
                    <button type="submit" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                    </span>
                </div>
			
			{!! Form::close() !!}
				
			</div>
			</div>
		</div>
	</div>
@stop