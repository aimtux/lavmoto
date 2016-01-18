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
                    Masukan data transaksi.
                </p>

                <?php echo Form::open(['method' => 'POST', 'url' => ['admin/debitur/' .$debitur->id. '/transaksi'], 'class' => 'form-horizontal', 'data-parsley-validate'=>"", 'novalidate'=>""]); ?>

                
                    <div class="form-group <?php if($errors->first('kode')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('kode', 'Kode Transaksi.*'); ?>

	            	    <?php echo Form::text('kode', $kode, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('kode')); ?></small>
	            	</div>


                    <div class="form-group <?php if($errors->first('debitur_id')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('debitur_id', 'ID Debitur.*'); ?>

	            	    <?php echo Form::text('debitur_id', $debitur->id, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('debitur_id')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('motor_id')): ?> has-error <?php endif; ?>">
					    <?php echo Form::label('motor_id', 'Merk Motor*'); ?>

					    <?php echo Form::select('motor_id', $motor, null, ['id' => 'motor_id', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' => 2]); ?>

					    <small class="text-danger"><?php echo e($errors->first('motor_id')); ?></small>
					</div>

	            	<div class="form-group <?php if($errors->first('uangmuka')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('uangmuka', 'Uang Muka*'); ?>

	            	    <?php echo Form::text('uangmuka', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 3, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('uangmuka')); ?></small>
	            	</div>

					<div class="form-group <?php if($errors->first('tempo')): ?> has-error <?php endif; ?>">
					    <?php echo Form::label('tempo', 'Tempo Kredit*'); ?>

					    <?php echo Form::select('tempo', $options, null, ['id' => 'tempo', 'class' => 'selectpicker', 'required' => 'required', 'data-style' => 'btn-white', 'data-parsley-id' => 4]); ?>

					    <small class="text-danger"><?php echo e($errors->first('tempo')); ?></small>
					</div>

					<div class="form-group <?php if($errors->first('no_polisi')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('no_polisi', 'No. Polisi*'); ?>

	            	    <?php echo Form::text('no_polisi', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 5, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('no_polisi')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('no_mesin')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('no_mesin', 'No. Mesin*'); ?>

	            	    <?php echo Form::text('no_mesin', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 6, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('no_mesin')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('no_rangka')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('no_rangka', 'No. Rangka*'); ?>

	            	    <?php echo Form::text('no_rangka', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 7, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('no_rangka')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('penyerah')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('penyerah', 'Penyerah*'); ?>

	            	    <?php echo Form::text('penyerah', $penyerah, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly', 'data-parsley-id' => 8, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('penyerah')); ?></small>
	            	</div>

	            	<div class="form-group <?php if($errors->first('penerima')): ?> has-error <?php endif; ?>">
	            	    <?php echo Form::label('penerima', 'Penerima*'); ?>

	            	    <?php echo Form::text('penerima', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-id' => 9, 'parsley-trigegr' => 'change']); ?>

	            	    <small class="text-danger"><?php echo e($errors->first('penerima')); ?></small>
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