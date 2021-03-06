<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!--========= Basic Page Needs =========-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--========== Specific Meta ==========-->
    <meta name="description" content="REMA">

    <!--======== Page Title===========-->
    <title>REMA - Result Management and Analysis</title>
    
    <!--========== Favicons =========-->
    <link rel="shortcut icon" href="<?php echo e(url('public/images/favicon.ico')); ?>">
    
    <!--======== Font icon Css ============-->
    <link href="<?php echo e(url('public/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('public/css/themify-icons.css')); ?>" rel="stylesheet">
    
    <!--======= Bootstrap Main Css =============-->
    <link href="<?php echo e(url('public/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <!--====== Plugins Css ================-->
    <link href="<?php echo e(url('public/css/plugins.css')); ?>" rel="stylesheet">

    <!--====== Custom CSS for themes =======-->
    <link href="<?php echo e(url('public/css/style.css')); ?>" rel="stylesheet">
    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--<script src="<?php echo e(url('public/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
-->
    <script>
        $(document).ready(function() {
        $('#table').DataTable();
    } );
    </script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</head>
<body>
        <?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
      
            <?php echo $__env->yieldContent('content'); ?>
        
</body>
</html>
<?php /**PATH /var/www/html/naijahacks2019-rema/resources/views/layouts/app.blade.php ENDPATH**/ ?>