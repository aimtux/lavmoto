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
                    Masukan data debitur dibawah ini.
                </p>

                {!! Form::model($debitur, ['method' => 'PATCH', 'url' => ['admin/debitur', $debitur->id], 'class' => 'form-horizontal']) !!}
                
                    <div class="form-group @if($errors->first('ktp')) has-error @endif">
	            	    {!! Form::label('ktp', 'No.KTP*') !!}
	            	    {!! Form::text('ktp', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('ktp') }}</small>
	            	</div>
	            
	            	<div class="form-group @if($errors->first('nama')) has-error @endif">
	            	    {!! Form::label('nama', 'Nama Lengkap*') !!}
	            	    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 2, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('nama') }}</small>
	            	</div>

	            	<div class="form-group">
        				<label for="tgl_lahir">Tanggal Lahir*</label>
        				<div class="input-group">
							<input type="text" name="tgl_lahir" class="form-control" placeholder="tahun-bulan-tanggal" id="datepicker-autoclose" value="{{ $debitur->tgl_lahir }}">
							<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
						</div>
            		</div>

					<div class="form-group @if($errors->first('jk')) has-error @endif">
					    {!! Form::label('jk', 'Jenis Kelamin*') !!}
					    {!! Form::select('jk', $options, null, ['id' => 'jk', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' =>'4']) !!}
					    <small class="text-danger">{{ $errors->first('jk') }}</small>
					</div>

					<div class="form-group @if($errors->first('pekerjaan')) has-error @endif">
	            	    {!! Form::label('pekerjaan', 'Pekerjaan*') !!}
	            	    {!! Form::text('pekerjaan', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 5, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('pekerjaan') }}</small>
	            	</div>

	            	<div class="form-group @if($errors->first('penghasilan')) has-error @endif">
	            	    {!! Form::label('penghasilan', 'Penghasilan*') !!}
	            	    {!! Form::text('penghasilan', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 6, 'parsley-trigegr' => 'change']) !!}
	            	    <small class="text-danger">{{ $errors->first('penghasilan') }}</small>
	            	</div>

					<div class="form-group @if($errors->first('alamat')) has-error @endif">
					    {!! Form::label('alamat', 'Alamat*') !!}
					    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('alamat') }}</small>
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