<?php $__env->startSection('content'); ?>
<div class="container">

    <!-- Page-Title -->
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

    

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
            <p> 
                <a href="<?php echo e(URL('admin/motor/create')); ?>"><button class="btn btn-default waves-effect waves-light">
                    <i class="fa fa-plus"></i> <span>Tambah Data</span>
                </button></a>
            </p>
                <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Tahun</th>
                                <th>Merk</th>
                                <th>Warna</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                        <?php /* */$x=0;/* */ ?>
                        <?php foreach($motor as $data): ?>
                        <?php /* */$x++;/* */ ?>
                            <tr>
                                <td><?php echo e($x); ?></td>
                                <td><a href="<?php echo e(url('admin/motor/'. $data->id)); ?>"> <?php echo e($data->kode); ?></a></td>
                                <td><?php echo e($data->tahun); ?></td>
                                <td><?php echo e($data->merk); ?></td>
                                <td><?php echo e($data->warna); ?></td>
                                <td>
                                    <a href="<?php echo e(URL('admin/motor/'.$data->id)); ?>">
                                        <button class="btn btn-icon waves-effect waves-light btn-info" >
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                    
                                    <a href="<?php echo e(URL('admin/motor/'.$data->id.'/edit')); ?>">
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
    <?php echo $__env->make('layouts.partial.modal', ['route' => 'admin/motor/', 'id' => $data->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>