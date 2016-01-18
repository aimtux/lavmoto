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
                    Data Debitur
                </li>
            </ol>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-6">
			<div class="card-box">
				<h4 class="m-t-0 header-title"><b>Data Debitur</b></h4>
				<p class="text-muted font-13 m-b-30">
                    Masukan data transaksi.
                </p>

                {!! Form::open(['method' => 'POST', 'url' => ['admin/debitur/' .$debitur->id. '/transaksi'], 'class' => 'form-horizontal', 'data-parsley-validate'=>"", 'novalidate'=>""]) !!}
                
                    <div class="form-group @if($errors->first('kode')) has-error @endif">
	            	    {!! Form::label('kode', 'Kode Transaksi.*') !!}
	            	    {!! Form::text('kode', $kode, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('kode') }}</small>
	            	</div>


                    <div class="form-group @if($errors->first('debitur_id')) has-error @endif">
	            	    {!! Form::label('debitur_id', 'ID Debitur.*') !!}
	            	    {!! Form::text('debitur_id', $debitur->id, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('debitur_id') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('motor_id')) has-error @endif">
					    {!! Form::label('motor_id', 'Merk Motor*') !!}
					    {!! Form::select('motor_id', $motor, null, ['id' => 'motor_id', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' => 2]) !!}
					    <small class="text-danger">{{ $errors->first('motor_id') }}</small>
					</div>

	            	<div class="form-group @if($errors->first('uangmuka')) has-error @endif">
	            	    {!! Form::label('uangmuka', 'Uang Muka*') !!}
	            	    {!! Form::text('uangmuka', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 3, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('uangmuka') }}</small>
	            	</div>

					<div class="form-group @if($errors->first('tempo')) has-error @endif">
					    {!! Form::label('tempo', 'Tempo Kredit*') !!}
					    {!! Form::select('tempo', $options, null, ['id' => 'tempo', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' => 4]) !!}
					    <small class="text-danger">{{ $errors->first('tempo') }}</small>
					</div>

					<div class="form-group @if($errors->first('no_polisi')) has-error @endif">
	            	    {!! Form::label('no_polisi', 'No. Polisi*') !!}
	            	    {!! Form::text('no_polisi', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 5, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('no_polisi') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('no_mesin')) has-error @endif">
	            	    {!! Form::label('no_mesin', 'No. Mesin*') !!}
	            	    {!! Form::text('no_mesin', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 6, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('no_mesin') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('no_rangka')) has-error @endif">
	            	    {!! Form::label('no_rangka', 'No. Rangka*') !!}
	            	    {!! Form::text('no_rangka', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 7, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('no_rangka') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('penyerah')) has-error @endif">
	            	    {!! Form::label('penyerah', 'Penyerah*') !!}
	            	    {!! Form::text('penyerah', $penyerah, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly', 'data-parsley-id' => 8, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('penyerah') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('penerima')) has-error @endif">
	            	    {!! Form::label('penerima', 'Penerima*') !!}
	            	    {!! Form::text('penerima', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 9, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('penerima') }}</small>
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