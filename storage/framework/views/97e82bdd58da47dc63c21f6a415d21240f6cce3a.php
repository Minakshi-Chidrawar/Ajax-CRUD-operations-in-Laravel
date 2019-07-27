<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'SelectWinners')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/master.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    </head>
    <body>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    </body>
</html>