<div class="accordion-box-content">
    <div class="tab-content clearfix">
        <div class="panel-wrap">
            <?php echo $__env->make('admin.storefront.tabs.partials.single_banner', [
                'label' => trans('storefront::storefront.form.banner_1'),
                'name' => 'storefront_slider_banner_1',
                'banner' => $banners['banner_1'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('admin.storefront.tabs.partials.single_banner', [
                'label' => trans('storefront::storefront.form.banner_2'),
                'name' => 'storefront_slider_banner_2',
                'banner' => $banners['banner_2'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/slider_banners.blade.php ENDPATH**/ ?>