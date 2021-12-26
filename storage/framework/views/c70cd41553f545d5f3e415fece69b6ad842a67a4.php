<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::checkbox('storefront_product_tabs_2_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_product_tabs_two_section'), $errors, $settings)); ?>

        <?php echo e(Form::text('translatable[storefront_product_tabs_2_section_title]', trans('storefront::attributes.title'), $errors, $settings)); ?>


        <div class="clearfix"></div>

        <div class="box-content clearfix">
            <h4 class="section-title"><?php echo e(trans('storefront::storefront.form.tab_1')); ?></h4>

            <?php echo e(Form::text('translatable[storefront_product_tabs_2_section_tab_1_title]', trans('storefront::attributes.title'), $errors, $settings)); ?>


            <?php echo $__env->make('admin.storefront.tabs.partials.products', [
                'fieldNamePrefix' => 'storefront_product_tabs_2_section_tab_1',
                'products' => $tabOneProducts,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title"><?php echo e(trans('storefront::storefront.form.tab_2')); ?></h4>

            <?php echo e(Form::text('translatable[storefront_product_tabs_2_section_tab_2_title]', trans('storefront::attributes.title'), $errors, $settings)); ?>


            <?php echo $__env->make('admin.storefront.tabs.partials.products', [
                'fieldNamePrefix' => 'storefront_product_tabs_2_section_tab_2',
                'products' => $tabTwoProducts,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title"><?php echo e(trans('storefront::storefront.form.tab_3')); ?></h4>

            <?php echo e(Form::text('translatable[storefront_product_tabs_2_section_tab_3_title]', trans('storefront::attributes.title'), $errors, $settings)); ?>


            <?php echo $__env->make('admin.storefront.tabs.partials.products', [
                'fieldNamePrefix' => 'storefront_product_tabs_2_section_tab_3',
                'products' => $tabThreeProducts,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="box-content clearfix">
            <h4 class="section-title"><?php echo e(trans('storefront::storefront.form.tab_4')); ?></h4>

            <?php echo e(Form::text('translatable[storefront_product_tabs_2_section_tab_4_title]', trans('storefront::attributes.title'), $errors, $settings)); ?>


            <?php echo $__env->make('admin.storefront.tabs.partials.products', [
                'fieldNamePrefix' => 'storefront_product_tabs_2_section_tab_4',
                'products' => $tabFourProducts,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php echo $__env->make('admin::partials.selectize_remote', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/product_tabs_two.blade.php ENDPATH**/ ?>