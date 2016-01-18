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
	                    Data Motor
	                </li>
	            </ol>
	        </div>
	    </div>

		<div class="col-lg-6">
			<div class="card-box">
				
			<h4 class="m-t-0 header-title"><b>Detail Motor | <?php echo e($motor->merk); ?></b></h4>			
			<div class="p-20">
				<table class="table table-striped m-0">
					<tbody>
						<tr>
							<th scope="row">Kode</th>
							<td><?php echo e($motor->kode); ?></td>
						</tr>
						<tr>
							<th scope="row">Tahun</th>
							<td><?php echo e($motor->tahun); ?></td>
						</tr>
						<tr>
							<th scope="row">Merk</th>
							<td><?php echo e($motor->merk); ?></td>
						</tr>
						<tr>
							<th scope="row">Jenis</th>
							<td><?php echo e($motor->jenis); ?></td>
						</tr>
						<tr>
							<th scope="row">Ukuran CC</th>
							<td><?php echo e($motor->ukuran_cc); ?></td>
						</tr>
						<tr>
							<th scope="row">Warna</th>
							<td><?php echo e($motor->warna); ?></td>
						</tr>
						<tr>
							<th scope="row">Harga</th>
							<td>Rp <?php echo e(number_format($motor->harga)); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>