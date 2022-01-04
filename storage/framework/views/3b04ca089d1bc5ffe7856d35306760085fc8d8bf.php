<?php $__env->startSection('title', $product->name); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($product->meta->meta_title ?: $product->name); ?>">
    <meta name="description" content="<?php echo e($product->meta->meta_description ?: $product->short_description); ?>">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e($product->meta->meta_title ?: $product->name); ?>">
    <meta property="og:description" content="<?php echo e($product->meta->meta_description ?: $product->short_description); ?>">
    <meta property="og:image" content="<?php echo e($product->base_image->path); ?>">
    <meta property="og:locale" content="<?php echo e(locale()); ?>">

    <?php $__currentLoopData = supported_locale_keys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <meta property="og:locale:alternate" content="<?php echo e($code); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <meta property="product:price:amount" content="<?php echo e($product->selling_price->convertToCurrentCurrency()->amount()); ?>">
    <meta property="product:price:currency" content="<?php echo e(currency()); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('globals'); ?>
    <script>
        FleetCart.langs['storefront::product.reviews'] = '<?php echo e(trans("storefront::product.reviews")); ?>';
        FleetCart.langs['storefront::product.related_products'] = '<?php echo e(trans("storefront::product.related_products")); ?>';
    </script>

    <?php echo $productSchemaMarkup->toScript(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php if(! $categoryBreadcrumb): ?>
        <li><a href="<?php echo e(route('products.index')); ?>"><?php echo e(trans('storefront::products.shop')); ?></a></li>
    <?php endif; ?>

    <?php echo $categoryBreadcrumb; ?>


    <li class="active"><?php echo e($product->name); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <product-show
        :product="<?php echo e($product); ?>"
        :review-count="<?php echo e($review->count ?? 0); ?>"
        :avg-rating="<?php echo e($review->avg_rating ?? 0); ?>"
        inline-template
    >
        <section class="product-details-wrap">
            <div class="container">
                <div class="product-details-top">
                    <div class="product-details-top-inner">
                        <?php echo $__env->make('public.products.show.images', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="product-details-info">
                            <div class="details-info-top">
                                <h1 class="product-name"><?php echo e($product->name); ?></h1>

                                <?php if(setting('reviews_enabled')): ?>
                                    <product-rating :rating-percent="ratingPercent" :review-count="totalReviews"></product-rating>
                                <?php endif; ?>

                                <?php if($product->isInStock()): ?>
                                    <?php if($product->manage_stock): ?>
                                        <div class="availability in-stock">
                                            <?php echo e(trans('storefront::product.left_in_stock', ['count' => $product->qty])); ?>

                                        </div>
                                    <?php else: ?>
                                        <div class="availability in-stock">
                                            <?php echo e(trans('storefront::product.in_stock')); ?>

                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="availability out-of-stock">
                                        <?php echo e(trans('storefront::product.out_of_stock')); ?>

                                    </div>
                                <?php endif; ?>

                                <div class="brief-description">
                                    <?php echo $product->short_description; ?>

                                </div>

                                <div class="details-info-top-actions">
                                    <button
                                        class="btn btn-wishlist"
                                        :class="{ 'added': inWishlist }"
                                        @click="syncWishlist"
                                    >
                                        <i class="la-heart" :class="inWishlist ? 'las' : 'lar'"></i>
                                        <?php echo e(trans('storefront::product.wishlist')); ?>

                                    </button>

                                    <button
                                        class="btn btn-compare"
                                        :class="{ 'added': inCompareList }"
                                        @click="syncCompareList"
                                    >
                                        <i class="las la-random"></i>
                                        <?php echo e(trans('storefront::product.compare')); ?>

                                    </button>
                                </div>
                            </div>

                            <div class="details-info-middle">
                                <div class="product-price" v-html="price">
                                    <?php echo $product->formatted_price; ?>

                                </div>

                                <form
                                    @submit.prevent="addToCart"
                                    @input="errors.clear($event.target.name)"
                                    @change="updatePrice"
                                    @nice-select-updated="updatePrice"
                                >
                                    <div class="product-variants">
                                        <?php $__currentLoopData = $product->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if ($__env->exists("public.products.show.custom_options.{$option->type}")) echo $__env->make("public.products.show.custom_options.{$option->type}", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="details-info-middle-actions">
                                        <div class="number-picker">
                                            <label for="qty"><?php echo e(trans('storefront::product.quantity')); ?></label>

                                            <div class="input-group-quantity">
                                                <input
                                                    type="text"
                                                    :value="cartItemForm.qty"
                                                    min="1"
                                                    max="<?php echo e($product->manage_stock ? $product->qty : ''); ?>"
                                                    id="qty"
                                                    class="form-control input-number input-quantity"
                                                    @input="updateQuantity($event.target.value)"
                                                    @keydown.up="updateQuantity(cartItemForm.qty + 1)"
                                                    @keydown.down="updateQuantity(cartItemForm.qty - 1)"
                                                >

                                                <span class="btn-wrapper">
                                                    <button type="button" class="btn btn-number btn-plus" data-type="plus"> + </button>
                                                    <button type="button" class="btn btn-number btn-minus" data-type="minus" disabled> - </button>
                                                </span>
                                            </div>
                                        </div>

                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-add-to-cart"
                                            :class="{'btn-loading': addingToCart }"
                                            <?php echo e($product->isOutOfStock() ? 'disabled' : ''); ?>

                                        >
                                            <i class="las la-cart-arrow-down"></i>
                                            <?php echo e(trans('storefront::product.add_to_cart')); ?>

                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="details-info-bottom">
                                <ul class="list-inline additional-info">
                                    <?php if (! (is_null($product->sku))): ?>
                                        <li class="sku">
                                            <label><?php echo e(trans('storefront::product.sku')); ?></label> <?php echo e($product->sku); ?>

                                        </li>
                                    <?php endif; ?>

                                    <?php if($product->categories->isNotEmpty()): ?>
                                        <li>
                                            <label><?php echo e(trans('storefront::product.categories')); ?></label>

                                            <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($category->url()); ?>"><?php echo e($category->name); ?></a><?php echo e($loop->last ? '' : ','); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                    <?php endif; ?>

                                    <?php if($product->tags->isNotEmpty()): ?>
                                        <li>
                                            <label><?php echo e(trans('storefront::product.tags')); ?></label>

                                            <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($tag->url()); ?>"><?php echo e($tag->name); ?></a><?php echo e($loop->last ? '' : ','); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>

                                <?php echo $__env->make('public.products.show.social_share', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>

                    
                </div>

                <div class="product-details-bottom flex-column-reverse flex-lg-row">
                    

                    <div class="product-details-bottom-inner">
                        <div class="product-details-tab clearfix">
                            <ul class="nav nav-tabs tabs">
                                <li class="nav-item">
                                    <a href="#description" data-toggle="tab" class="nav-link" :class="{ active: activeTab === 'description' }">
                                        <?php echo e(trans('storefront::product.description')); ?>

                                    </a>
                                </li>

                                <?php if($product->hasAnyAttribute()): ?>
                                    <li class="nav-item">
                                        <a href="#specification" data-toggle="tab" class="nav-link" :class="{ active: activeTab === 'specification' }">
                                            <?php echo e(trans('storefront::product.specification')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if(setting('reviews_enabled')): ?>
                                    <li class="nav-item">
                                        <a href="#reviews" data-toggle="tab" class="nav-link" :class="{ active: activeTab === 'reviews' }" v-cloak>
                                            {{ $trans('storefront::product.reviews', { count: totalReviews }) }}
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>

                            <div class="tab-content">
                                <?php echo $__env->make('public.products.show.tab_description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('public.products.show.tab_specification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('public.products.show.tab_reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <related-products :products="<?php echo e($relatedProducts); ?>"></related-products>
                    </div>
                </div>
            </div>
        </section>
    </product-show>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(v(Theme::url('public/js/flatpickr.js'))); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show.blade.php ENDPATH**/ ?>