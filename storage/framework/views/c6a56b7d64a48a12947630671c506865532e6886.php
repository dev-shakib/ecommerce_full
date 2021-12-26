<div class="social-share">
    <label><?php echo e(trans('storefront::product.share')); ?></label>

    <ul class="list-inline social-links">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" title="<?php echo e(trans('storefront::product.facebook')); ?>" target="_blank">
                <i class="lab la-facebook"></i>
            </a>
        </li>

        <li>
            <a href="https://twitter.com/share?url=<?php echo e(url()->current()); ?>&text=<?php echo e($product->name); ?>" title="<?php echo e(trans('storefront::product.twitter')); ?>" target="_blank">
                <i class="lab la-twitter"></i>
            </a>
        </li>

        <li>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(url()->current()); ?>" title="<?php echo e(trans('storefront::product.linkedin')); ?>" target="_blank">
                <i class="lab la-linkedin"></i>
            </a>
        </li>

        <li>
            <a href="http://www.tumblr.com/share?v=3&u=<?php echo e(url()->current()); ?>" title="<?php echo e(trans('storefront::product.tumblr')); ?>" target="_blank">
                <i class="lab la-tumblr"></i>
            </a>
        </li>
    </ul>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show/social_share.blade.php ENDPATH**/ ?>