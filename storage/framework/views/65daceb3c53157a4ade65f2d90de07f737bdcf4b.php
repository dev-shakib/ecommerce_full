

<?php $__env->startSection('title', trans('storefront::account.pages.my_reviews')); ?>

<?php $__env->startSection('account_breadcrumb'); ?>
    <li class="active"><?php echo e(trans('storefront::account.pages.my_reviews')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel'); ?>
    <div class="panel">
        <div class="panel-header">
            <h4><?php echo e(trans('storefront::account.pages.my_reviews')); ?></h4>
        </div>

        <div class="panel-body">
            <?php if($reviews->isEmpty()): ?>
                <div class="empty-message">
                    <h3><?php echo e(trans('storefront::account.reviews.no_reviews')); ?></h3>
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-borderless my-reviews-table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('storefront::account.image')); ?></th>
                                <th><?php echo e(trans('storefront::account.product_name')); ?></th>
                                <th><?php echo e(trans('storefront::account.date')); ?></th>
                                <th><?php echo e(trans('storefront::account.reviews.rating')); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="product-image">
                                            <?php if($review->product->base_image->exists): ?>
                                                <img src="<?php echo e($review->product->base_image->path); ?>" alt="<?php echo e($review->product->name); ?>">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>" class="image-placeholder">
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <td>
                                        <a href="<?php echo e(route('products.show', ['slug' => $review->product->slug])); ?>" class="product-name">
                                            <?php echo e($review->product->name); ?>

                                        </a>
                                    </td>

                                    <td>
                                        <?php echo e($review->created_at->toFormattedDateString()); ?>

                                    </td>

                                    <td>
                                        <?php echo $__env->make('public.account.reviews.partials.product_rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <div class="panel-footer">
            <?php echo $reviews->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/reviews/index.blade.php ENDPATH**/ ?>