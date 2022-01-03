<div class="accordion-box-content">
    <div class="row">
        <div class="col-md-8">
            <?php echo e(Form::checkbox('storefront_one_column_banner_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_one_column_banner_section'), $errors, $settings)); ?>

        </div>
    </div>

    <div class="tab-content clearfix">
        <div class="panel-wrap">
            <?php echo $__env->make('admin.storefront.tabs.partials.single_banner', [
                'label' => trans('storefront::storefront.form.banner'),
                'name' => 'storefront_one_column_banner',
                'banner' => $banner,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/one_column_banner.blade.php ENDPATH**/ ?>