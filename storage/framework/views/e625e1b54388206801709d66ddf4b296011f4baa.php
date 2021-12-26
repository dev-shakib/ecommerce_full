<div class="accordion-box-content">
    <div class="tab-content clearfix">
        <div class="panel-wrap">
            <?php echo $__env->make('admin.storefront.tabs.partials.single_banner', [
                'label' => trans('storefront::storefront.form.product_page_banner'),
                'name' => 'storefront_product_page_banner',
                'banner' => $banner,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/product_page.blade.php ENDPATH**/ ?>