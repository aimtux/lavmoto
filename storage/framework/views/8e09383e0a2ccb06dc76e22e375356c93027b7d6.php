<?php $__env->startSection('content'); ?>
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
                
            <h4 class="m-t-0 header-title"><b>Detail Transaksi | <?php echo e($transaksi->debitur->nama); ?></b></h4>            
            <div class="p-20">
                <table class="table table-striped m-0">
                    <tbody>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Motor</th>
                        </tr>

                        <tr>
                           <td><a href="<?php echo e(route('admin.debitur.transaksi.show', [$transaksi->debitur->id, $transaksi->id])); ?>"><?php echo e($transaksi->kode); ?></a></td>
                           <td><a href="<?php echo e(route('admin.debitur.show', [$transaksi->debitur->id] )); ?>"><?php echo e($transaksi->debitur->nama); ?></a></td>
                           <td><a href="<?php echo e(route('admin.motor.show', [$transaksi->motor->id] )); ?>"><?php echo e($transaksi->motor->merk); ?></a></td>
                        </tr>
                        
                        <tr>
                            <th>Uang Muka</th>
                            <th>Tempo</th>
                            <th>Angsuran</th>
                        </tr>

                        <tr>
                           <td>Rp <?php echo e(number_format($transaksi->uangmuka)); ?></td>
                           <td><?php echo e($transaksi->tempo); ?> Bulan</td>
                           <td>Rp <?php echo e(number_format($transaksi->angsuran)); ?></td>
                        </tr>

                        <tr>
                            <th>No. Polisi</th>
                            <th>No. Mesin</th>
                            <th>No. Rangka</th>
                        </tr>

                        <tr>
                            <td><?php echo e($transaksi->no_polisi); ?></td>
                           <td><?php echo e($transaksi->no_mesin); ?></td>
                           <td><?php echo e($transaksi->no_rangka); ?></td>
                        </tr>

                       <?php /*  <tr>
                            <th>Sisa Angsuran</th>
                        </tr>

                        <tr>
                            <td><?php echo e($sisa); ?></td>
                        </tr> */ ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <?php if($tempo <= $transaksi->tempo): ?>
        <div class="col-lg-4">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Form Angsuran</b></h4>            
            <div class="p-20">
                <?php echo Form::open(['method' => 'POST', 'url' => 'admin/angsuran/'. $transaksi->kode, 'class' => 'form-horizontal']); ?>

                
                    <div class="form-group <?php if($errors->first('kode')): ?> has-error <?php endif; ?>">
                        <?php echo Form::label('kode', 'Kode Transaksi*'); ?>

                        <?php echo Form::text('kode', $transaksi->kode, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly', 'data-parsley-id' => 1, 'parsley-trigegr' => 'change']); ?>

                        <small class="text-danger"><?php echo e($errors->first('kode')); ?></small>
                    </div>

                    <div class="form-group <?php if($errors->first('angsuran_ke')): ?> has-error <?php endif; ?>">
                        <?php echo Form::label('angsuran_ke', 'Angsuran Ke*'); ?>

                        <?php echo Form::text('angsuran_ke', $tempo, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly','data-parsley-id' => 2, 'parsley-trigegr' => 'change']); ?>

                        <small class="text-danger"><?php echo e($errors->first('angsuran_ke')); ?></small>
                    </div>

                    <div class="form-group <?php if($errors->first('tunai')): ?> has-error <?php endif; ?>">
                        <?php echo Form::label('tunai', 'Uang Tunai Angsuran*'); ?>

                        <?php echo Form::text('tunai', $transaksi->angsuran, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly', 'data-parsley-id' => 3, 'parsley-trigegr' => 'change']); ?>

                        <small class="text-danger"><?php echo e($errors->first('tunai')); ?></small>
                    </div>
                
                    <div class="btn-group pull-right">
                        <?php echo Form::submit("Add", ['class' => 'btn btn-success']); ?>

                    </div>
                
                <?php echo Form::close(); ?>

            </div>
            </div>
        </div>
        <?php else: ?>
            <div class="col-lg-4">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Status Angsuran</b></h4>            
            <div class="p-20">
                <h1>Lunas</h1>
            </div>
            </div>
        </div>
        <?php endif; ?>

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
                    <?php /* */$x=0;/* */ ?>
                    <?php foreach($angsuran as $data): ?>
                    <?php /* */$x++;/* */ ?>
                        <tr>
                            <td><?php echo e($x); ?></td>
                            <td><?php echo e($data->kode); ?></td>
                            <td>Ke-<?php echo e($data->angsuran_ke); ?> </td>
                            <td>Rp <?php echo e(number_format($data->tunai)); ?></td>
                            <td><?php echo e($data->created_at); ?></td>
                            <td>
                                 <a href="<?php echo e(URL('admin/angsuran/'.$data->kode.'/print')); ?>">
                                        <button class="btn btn-icon waves-effect waves-light btn-success" >
                                            <i class="fa fa-print">Print</i>
                                        </button>
                                    </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>