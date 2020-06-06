

<?php $__env->startSection('title'); ?>
Laravel Shopping Cart
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $products->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <?php $__currentLoopData = $productChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6  col-xs-12 col-md-4 card-height">
            <div class="card thumbnail h-100" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo e($product->imagePath); ?>" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo e($product->title); ?></h5>
                    <p class="card-text"><?php echo e($product->description); ?></p>
                    <div class="clearfix mt-auto">
                        <div class="float-left price">&#36;<?php echo e($product->price); ?></div>
                        <a href="<?php echo e(route('product.addToCart', ['id' => $product->id])); ?>" class="btn btn-success btn-outline-success float-right "><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping-cart\resources\views/shop/index.blade.php ENDPATH**/ ?>