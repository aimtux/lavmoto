<?php $__env->startSection('content'); ?>
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

                <?php echo Form::open(['method' => 'POST', 'route' => 'admin.debitur.store', 'class' => 'form-horizontal', 'data-parsley-validate'=>"", 'novalidate'=>""]); ?>

                
                    <div class="form-group <?php if($errors->first('ktp')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('ktp', 'No.KTP*'); ?>

	            	    <?php echo Form::text('ktp', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('ktp')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('nama')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('nama', 'Nama Lengkap*'); ?>

	            	    <?php echo Form::text('nama', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 2, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('nama')); ?></small>
	            	</div>

	            	<div class="form-group">
        				<label for="tgl_lahir">Tanggal Lahir*</label>
        				<div class="input-group">
							<input type="text" name="tgl_lahir" class="form-control" placeholder="tahun-bulan-tanggal" id="datepicker-autoclose">
							<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
						</div>
            		</div>

					<div class="form-group <?php if($errors->first('jk')): ?> has-error <?php endif; ?>">
					    <?php echo Form::label('jk', 'Jenis Kelamin*'); ?>

					    <?php echo Form::select('jk', $options, null, ['id' => 'jk', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' =>'4']); ?>

					    <small class="text-danger"><?php echo e($errors->first('jk')); ?></small>
					</div>

					<div class="form-group <?php if($errors->first('pekerjaan')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('pekerjaan', 'Pekerjaan*'); ?>

	            	    <?php echo Form::text('pekerjaan', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 5, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('pekerjaan')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('penghasilan')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('penghasilan', 'Penghasilan*'); ?>

	            	    <?php echo Form::text('penghasilan', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 6, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('penghasilan')); ?></small>
	            	</div>

					<div class="form-group <?php if($errors->first('alamat')): ?> has-error <?php endif; ?>">
					    <?php echo Form::label('alamat', 'Alamat*'); ?>

					    <?php echo Form::textarea('alamat', null, ['class' => 'form-control', 'required' => 'required']); ?>

					    <small class="text-danger"><?php echo e($errors->first('alamat')); ?></small>
					</div>

					<div class="form-group text-right m-b-0">
						<button class="btn btn-primary waves-effect waves-light" type="submit">
							Submit
						</button>
						<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
							Cancel
						</button>
					</div>
                
                <?php echo Form::close(); ?>


			</div>
		</div>
    </div>


</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>