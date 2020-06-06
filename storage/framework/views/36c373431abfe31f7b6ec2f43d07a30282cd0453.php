<?php $__env->startSection('title'); ?>
Laravel Shopping Cart
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php if(Session::has('cart')): ?>

<div class="row">
    <ul class="list-group col-12">
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item col-12">
                <div class="col-1">
                    <span class="badge badge-secondary"><?php echo e($product['qty']); ?></span>
                </div>
                <div class="col-4">
                    <strong><?php echo e($product['item']['title']); ?></strong>
                </div>
                <div class="offset-md-2 col-1">
                    <span class="label label-success"><?php echo e($product['price']); ?></span>
                </div>
                <div class="offset-md-1 col-md-2">
                    <div class="btn-group pull-right">
                        <button type="button" class="text-right btn btn-primary btn-outline-primary btn-xs active dropdown-toggle" data-toggle="dropdown"  >
                            Action <span class="caret"></span>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a href="#" class="dropdown-item">Reduce by 1</a></li>
                                <li><a href="#" class="dropdown-item">Remove all</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> 
        
    </ul>
    
</div>
<div class="row">
    <div class="col-sm-6">
        <strong>Total Price: <?php echo e($totalPrice); ?></strong>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <button type="button" class="btn btn-success btn-outline-success">Checkout</button>
    </div>
</div>
<?php else: ?>
<div class="row">
    <div class="col-sm-6">
        <h2>No item in cart!</h2>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shopping-cart\resources\views/shop/shopping-cart.blade.php ENDPATH**/ ?>