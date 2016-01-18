@extends('layouts.form')
@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Form Input</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Lavmoto</a>
                </li>
                <li>
                    <a href="#">Form</a>
                </li>
                <li class="active">
                    Data Motor
                </li>
            </ol>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-6">
			<div class="card-box">
				<h4 class="m-t-0 header-title"><b>Data Motor</b></h4>
				<p class="text-muted font-13 m-b-30">
                    Masukan data motor dibawah ini.
                </p>

                {!! Form::open(['method' => 'POST', 'route' => 'admin.motor.store', 'class' => 'form-horizontal', 'data-parsley-validate'=>"", 'novalidate'=>""]) !!}
                
                    <div class="form-group @if($errors->first('kode')) has-error @endif">
	            	    {!! Form::label('kode', 'Kode*') !!}
	            	    {!! Form::text('kode', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('kode') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('tahun')) has-error @endif">
	            	    {!! Form::label('tahun', 'Tahun Produksi*') !!}
	            	    {!! Form::text('tahun', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 2, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('tahun') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('merk')) has-error @endif">
	            	    {!! Form::label('merk', 'Merk Kendaraan*') !!}
	            	    {!! Form::text('merk', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 3, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('merk') }}</small>
	            	</div>

					<div class="form-group @if($errors->first('jenis')) has-error @endif">
					    {!! Form::label('jenis', 'Jenis*') !!}
					    {!! Form::select('jenis', $options, null, ['id' => 'jenis', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' =>'4']) !!}
					    <small class="text-danger">{{ $errors->first('jenis') }}</small>
					</div>

					<div class="form-group @if($errors->first('warna')) has-error @endif">
	            	    {!! Form::label('warna', 'Warna*') !!}
	            	    {!! Form::text('warna', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 5, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('warna') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('ukuran_cc')) has-error @endif">
	            	    {!! Form::label('ukuran_cc', 'Ukuran CC*') !!}
	            	    {!! Form::text('ukuran_cc', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 6, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('ukuran_cc') }}</small>
	            	</div>

					<div class="form-group @if($errors->first('harga')) has-error @endif">
	            	    {!! Form::label('harga', 'Harga*') !!}
	            	    {!! Form::text('harga', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 7, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('harga') }}</small>
	            	</div>

					<div class="form-group text-right m-b-0">
						<button class="btn btn-primary waves-effect waves-light" type="submit">
							Submit
						</button>
						<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
							Cancel
						</button>
					</div>
                
                {!! Form::close() !!}

			</div>
		</div>
    </div>


</div> 
@stop