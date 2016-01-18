<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                        <h4>Invoice</h4>
                    </div> -->
                    <div class="panel-body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-right"><img src="<?php echo e(asset('assets/images/logo_dark.png')); ?>" alt="velonic"></h4>
                                
                            </div>
                            <div class="pull-right">
                                <h4>Invoice # <br>
                                    <strong><?php echo e(date('Y-m-d').rand(0,999)); ?></strong>                                    
                                </h4>
                                    <strong>Nama: </strong> <?php echo e($transaksi->debitur->nama); ?><br/>
                                    <strong>Angsuran: </strong> <?php echo e($transaksi->tempo); ?> Bulan<br/>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                           <?php /*  <div class="col-md-12">
                                
                                <div class="pull-left m-t-30">
                                    <address>
                                      <strong>Twitter, Inc.</strong><br>
                                      795 Folsom Ave, Suite 600<br>
                                      San Francisco, CA 94107<br>
                                      <abbr title="Phone">P:</abbr> (123) 456-7890
                                      </address>
                                </div>

                                <div class="pull-right m-t-30">
                                    <p><strong>Kode: </strong> <?php echo e($angsuran->kode); ?></p>
                                    <p class="m-t-10"><strong>Angsuran ke: </strong> <?php echo e($angsuran->angsuran_ke); ?></p>
                                </div>
                            </div> */ ?>
                        </div>
                        <div class="m-h-50"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table m-t-30" >
                                        <thead border="0.1">
                                            <tr>
                                                <th>#</th>
                                                <th align="left">Kode</th>
                                                <th align="left">Angsuran Ke</th>
                                                <th align="left">Tunai</th>
                                                <th align="left">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><?php echo e($angsuran->kode); ?></td>
                                                <td><?php echo e($angsuran->angsuran_ke); ?></td>
                                                <td><?php echo e(number_format($angsuran->tunai)); ?></td>
                                                <td><?php echo e($angsuran->created_at); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="border-radius: 0px;">
                            <div class="col-md-3 col-md-offset-9">
                               <?php /*  <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                                <p class="text-right">Discout: 12.9%</p>
                                <p class="text-right">VAT: 12.9%</p> */ ?>
                                <hr>
                                <h3 class="text-right">IDR <?php echo e(number_format($angsuran->tunai)); ?></h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>

        </div>

    </div> <!-- container -->
               
</div> <!-- content -->
</body>
</html>