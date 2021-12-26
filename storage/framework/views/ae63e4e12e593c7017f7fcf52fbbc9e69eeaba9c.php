<?php $__env->startSection('title', setting('store_tagline')); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->renderWhen(! is_null($slider), 'public.home.sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

<?php if(setting('storefront_features_section_enabled')): ?>
<home-features :features="<?php echo e(json_encode($features)); ?>"></home-features>
<?php endif; ?>

<?php if(setting('storefront_featured_categories_section_enabled')): ?>

<section class="featured-categories-wrap">
    <div class="container">
        <div class="featured-categories-header">
            <div class="featured-categories-text">
                <h2 class="title">Explore Popular Categories</h2> <span class="excerpt"></span>
            </div>
            <ul class="tabs featured-categories-tabs">
                
                <?php $__currentLoopData = $featuredCategories['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <a href="<?php echo e('/categories/'.$item['slug'].'/products'); ?>">
                    <li class="tab-item">
                        <div class="featured-category-image"><img
                                src="<?php echo e($item['logo']['path']); ?>"
                                alt="category logo" class="">
                        </div>
                        <span class="featured-category-name"><?php echo e($item['name']); ?></span>
                    </li>
                   </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</section>
<?php endif; ?>

<?php if(setting('storefront_three_column_banners_enabled')): ?>
<banner-three-column :data="<?php echo e(json_encode($threeColumnBanners)); ?>"></banner-three-column>
<?php endif; ?>

<?php if(setting('storefront_three_column_full_width_banners_enabled')): ?>
<banner-three-column-full-width :data="<?php echo e(json_encode($threeColumnFullWidthBanners)); ?>">
</banner-three-column-full-width>
<?php endif; ?>


<?php if(setting('storefront_product_tabs_1_section_enabled')): ?>
<product-tabs-one :data="<?php echo e(json_encode($productTabsOne)); ?>"></product-tabs-one>
<?php endif; ?>


<?php if(setting('storefront_one_column_banner_enabled')): ?>
<banner-one-column :banner="<?php echo e(json_encode($oneColumnBanner)); ?>"></banner-one-column>
<?php endif; ?>

<h2 class="lskit-title">Best Deals</h2>
<?php if(setting('storefront_product_grid_section_enabled')): ?>
<product-grid :data="<?php echo e(json_encode($productGrid)); ?>"></product-grid>
<?php endif; ?>


<?php if(setting('storefront_product_tabs_2_section_enabled')): ?>
<product-tabs-two :data="<?php echo e(json_encode($tabProductsTwo)); ?>"></product-tabs-two>
<?php endif; ?>

<?php if(setting('storefront_two_column_banners_enabled')): ?>
<banner-two-column :data="<?php echo e(json_encode($twoColumnBanners)); ?>"></banner-two-column>
<?php endif; ?>

<?php if(setting('storefront_flash_sale_and_vertical_products_section_enabled')): ?>
<flash-sale-and-vertical-products :data="<?php echo e(json_encode($flashSaleAndVerticalProducts)); ?>">
</flash-sale-and-vertical-products>
<?php endif; ?>

<?php if(setting('storefront_top_brands_section_enabled') && $topBrands->isNotEmpty()): ?>
<top-brands :top-brands="<?php echo e(json_encode($topBrands)); ?>"></top-brands>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/home/index.blade.php ENDPATH**/ ?>