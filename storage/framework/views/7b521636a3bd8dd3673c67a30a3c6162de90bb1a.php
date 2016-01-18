<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon_1.ico')); ?>">

        <title>Lavmoto | Sistem Kredit Motor</title>
        
        <?php /* Plugin CSS */ ?>
        <link href="<?php echo e(asset('assets/plugins/bootstrapvalidator/src/css/bootstrapValidator.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')); ?>" rel="stylesheet" />

        <link href="<?php echo e(asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">


        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/core.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/components.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/pages.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}"></script>
        <![endif]-->

        <script src="<?php echo e(asset('assets/js/modernizr.min.js')); ?>"></script>
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php echo $__env->make('layouts.partial.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php echo $__env->make('layouts.partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
               <!-- Start content -->
                <div class="content">
                  <!-- Start Container -->
                  <?php echo $__env->yieldContent('content'); ?>
                  <!-- End Container -->                     
                </div> 
                <!-- content -->

                <footer class="footer text-right">
                    <?php echo e(date('Y')); ?> © Ahmad Hakim @ 2013112001.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/detect.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/fastclick.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.slimscroll.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.blockUI.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/waves.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.nicescroll.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.scrollTo.min.js')); ?>"></script>


        <script src="<?php echo e(asset('assets/js/jquery.core.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.app.js')); ?>"></script>

        <?php /* Plugin jss */ ?>
        <script type="text/javascript" src="<?php echo e(asset('assets/plugins/parsleyjs/dist/parsley.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('assets/plugins/autoNumeric/autoNumeric.js')); ?>" type="text/javascript"></script>

        <script src="<?php echo e(asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
        
        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

        <script>
            jQuery(document).ready(function() {

                // Date Picker
                jQuery('#datepicker-autoclose').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                });
            });
        </script>


	</body>
</html>