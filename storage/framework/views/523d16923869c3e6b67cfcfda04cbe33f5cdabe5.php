<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p>
                <h4 class="page-title">Homepage</h4>
            </p>
            <p>
                Welcome!
            </p>
        </div>
    </div>

    <div class="col-lg-9">
        <div class="panel panel-color panel-inverse">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="#" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Lavm<i class="md md-album"></i>to</span></a>
                </h3>
            </div>
            <div class="panel-body">
                <p>
                    Selamat datang di halaman depan aplikasi Sistem Informasi Kredit Motor <b>LAVMOTO</b>. </br>
                    Silakan log in untuk menggunakan aplikasi.                   
                </p>
                <p>
                    Aplikasi ini dibuat untuk melengkapi tugas UAS Rekayasa Aplikasi Internet PHP Framework dan dibuat dengan Framework <b><i>Laravel</i></b>
                </p>
            </div>
        </div>
    </div>    
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>