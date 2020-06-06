<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" 
              href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" 
              crossorigin="anonymous">
        <link rel="stylesheet" 
              href="https://fonts.googleapis.com/icon?family=Material+Icons" >
        <link rel="stylesheet" 
              href='<?php echo e(URL::to('src/css/app.css')); ?>'>
        <script src="https://kit.fontawesome.com/1b9090eee4.js" 
        crossorigin="anonymous"></script>
        
        <?php echo $__env->yieldContent('styles'); ?>
    </head>
    <body>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class='container'>
            
            <?php echo $__env->yieldContent('content'); ?>
          
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" 
                integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" 
        crossorigin="anonymous"></script>

        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" 
                integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" 
        crossorigin="anonymous"></script>
        <script>$(document).ready(function () {
                $('body').bootstrapMaterialDesign();
            });</script>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
<?php /**PATH D:\XAMPP\htdocs\shopping-cart\resources\views/layouts/master.blade.php ENDPATH**/ ?>