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

                <?php echo Form::model($motor, ['method' => 'PATCH', 'url' => ['admin/motor', $motor->id], 'class' => 'form-horizontal']); ?>


                	<div class="form-group <?php if($errors->first('kode')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('kode', 'Kode*'); ?>

	            	    <?php echo Form::text('kode', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('kode')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('tahun')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('tahun', 'Tahun Produksi*'); ?>

	            	    <?php echo Form::text('tahun', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 2, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('tahun')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('merk')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('merk', 'Merk Kendaraan*'); ?>

	            	    <?php echo Form::text('merk', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 3, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('merk')); ?></small>
	            	</div>

					<div class="form-group <?php if($errors->first('jenis')): ?> has-error <?php endif; ?>">
					    <?php echo Form::label('jenis', 'Jenis*'); ?>

					    <?php echo Form::select('jenis', $options, null, ['id' => 'jenis', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' =>'4']); ?>

					    <small class="text-danger"><?php echo e($errors->first('jenis')); ?></small>
					</div>

					<div class="form-group <?php if($errors->first('warna')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('warna', 'Warna*'); ?>

	            	    <?php echo Form::text('warna', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 5, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('warna')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('ukuran_cc')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('ukuran_cc', 'Ukuran CC*'); ?>

	            	    <?php echo Form::text('ukuran_cc', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 6, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('ukuran_cc')); ?></small>
	            	</div>

					<div class="form-group <?php if($errors->first('harga')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('harga', 'Harga*'); ?>

	            	    <?php echo Form::text('harga', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 7, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('harga')); ?></small>
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