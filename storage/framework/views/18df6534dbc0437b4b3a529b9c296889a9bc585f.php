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

        <div class="col-lg-6">
            <div class="card-box">
                
            <h4 class="m-t-0 header-title"><b>Detail Motor | <?php echo e($debitur->nama); ?></b></h4>          
            <div class="p-20">
                <table class="table table-striped m-0">
                    <tbody>
                        <tr>
                            <th scope="row">KTP</th>
                            <td><?php echo e($debitur->ktp); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                            <td><?php echo e($debitur->nama); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Lahir</th>
                            <td><?php echo e($debitur->tgl_lahir); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>
                                <?php if($debitur->jk == 'L'): ?>
                                    Laki-laki
                                <?php elseif($debitur->jk == 'P'): ?>
                                    Perempuan
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Pekerjaan</th>
                            <td><?php echo e($debitur->pekerjaan); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Penghasilan</th>
                            <td>Rp <?php echo e(number_format($debitur->penghasilan)); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td><?php echo e($debitur->alamat); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>