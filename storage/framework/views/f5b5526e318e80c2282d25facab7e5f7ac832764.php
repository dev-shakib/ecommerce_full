<div class="home-banner-wrap">
    <a href="<?php echo e($sliderBanners['banner_1']->call_to_action_url); ?>"
        class="banner"
        target="<?php echo e($sliderBanners['banner_1']->open_in_new_window ? '_blank' : '_self'); ?>"
    >
        <img src="<?php echo e($sliderBanners['banner_1']->image->path); ?>" alt="banner">
    </a>

    <a href="<?php echo e($sliderBanners['banner_2']->call_to_action_url); ?>"
        class="banner m-t-30"
        target="<?php echo e($sliderBanners['banner_2']->open_in_new_window ? '_blank' : '_self'); ?>"
    >
        <img src="<?php echo e($sliderBanners['banner_2']->image->path); ?>" alt="banner">
    </a>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/home/sections/slider_banners.blade.php ENDPATH**/ ?>