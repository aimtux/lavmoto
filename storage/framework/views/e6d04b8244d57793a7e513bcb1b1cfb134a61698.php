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
	                    Data Debitur
	                </li>
	            </ol>
	        </div>
	    </div>
        <div class="col-lg-12">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Detail Debitur | <?php echo e($debitur->nama); ?></b></h4>            
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
                           <th><?php echo e($debitur->ktp); ?></th>
                           <th><?php echo e($debitur->nama); ?></th>
                           <th><?php echo e($debitur->tgl_lahir); ?></th>
                           <th>
                               <?php if($debitur->jk == 'L'): ?>
                                   Laki-laki
                                <?php else: ?>
                                   Perempuan
                               <?php endif; ?>
                           </th>
                           <th><?php echo e($debitur->pekerjaan); ?></th>
                           <th><?php echo e($debitur->penghasilan); ?></th>
                           <th><?php echo e($debitur->alamat); ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

		<div class="col-sm-12">
			<div class="card-box">
			<h4 class="m-t-0 header-title"><b>Data Transaksi | <?php echo e($debitur->nama); ?></b></h4>
            <p> 
                <a href="<?php echo e(route('admin.debitur.transaksi.create', [$debitur->id])); ?>"><button class="btn btn-default waves-effect waves-light">
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
                    <?php /* */$x=0;/* */ ?>
                    <?php foreach($debitur->transaksi as $data): ?>
                    <?php /* */$x++;/* */ ?>
                        <tr>
                            <td><?php echo e($x); ?></td>
                            <td><a href="<?php echo e(URL('admin/motor/'. $data->motor->id)); ?>"> <?php echo e($data->motor->merk); ?></a></td>
                            <td><?php echo e($data->tempo); ?> Bulan</td>
                            <td>Rp <?php echo e(number_format($data->angsuran)); ?></td>
                            <td><?php echo e($data->no_polisi); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.debitur.transaksi.show', [$debitur->id, $data->id])); ?>">
                                    <button class="btn btn-icon waves-effect waves-light btn-info" >
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>
                                
                                <a href="<?php echo e(route('admin.debitur.transaksi.edit', [$debitur->id, $data->id])); ?>">
                                    <button class="btn btn-icon waves-effect waves-light btn-warning" >
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>

                                <button class="btn btn-icon waves-effect waves-light btn-danger" data-toggle="modal" data-target="#confModal">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
			</div>
			</div>
		</div>
	</div>

<?php if($x >= 1): ?>
    <div id="confModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                </div>
                <?php echo Form::open(['route' => ['admin.debitur.transaksi.destroy', $debitur->id, $data->id]]); ?>

                        <?php echo Form::hidden('_method', 'DELETE'); ?>

                        
                <div class="modal-body">
                    <h4>Yakin data akan dihapus ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php endif; ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>