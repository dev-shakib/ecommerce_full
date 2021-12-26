

<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('category::categories.categories')); ?>

    <li class="active"><?php echo e(trans('category::categories.categories')); ?></li>
<?php if (isset($__componentOriginald1838d9cbc3e98f76d88606a9883c1cec482d537)): ?>
<?php $component = $__componentOriginald1838d9cbc3e98f76d88606a9883c1cec482d537; ?>
<?php unset($__componentOriginald1838d9cbc3e98f76d88606a9883c1cec482d537); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-default">
        <div class="box-body clearfix">
            <div class="col-lg-2 col-md-3">
                <div class="row">
                    <button class="btn btn-default add-root-category"><?php echo e(trans('category::categories.tree.add_root_category')); ?></button>
                    <button class="btn btn-default add-sub-category disabled"><?php echo e(trans('category::categories.tree.add_sub_category')); ?></button>

                    <div class="m-b-10">
                        <a href="#" class="collapse-all"><?php echo e(trans('category::categories.tree.collapse_all')); ?></a> |
                        <a href="#" class="expand-all"><?php echo e(trans('category::categories.tree.expand_all')); ?></a>
                    </div>

                    <div class="category-tree"></div>
                </div>
            </div>

            <div class="col-lg-10 col-md-9">
                <div class="tab-wrapper category-details-tab">
                    <ul class="nav nav-tabs">
                        <li class="general-information-tab active"><a data-toggle="tab" href="#general-information"><?php echo e(trans('category::categories.tabs.general')); ?></a></li>

                        <?php if ($currentUser->hasAccess('admin.media.index')) : ?>
                            <li class="image-tab"><a data-toggle="tab" href="#image"><?php echo e(trans('category::categories.tabs.image')); ?></a></li>
                        <?php endif; ?>

                        <li class="seo-tab hide"><a data-toggle="tab" href="#seo"><?php echo e(trans('category::categories.tabs.seo')); ?></a></li>
                    </ul>

                    <form method="POST" action="<?php echo e(route('admin.categories.store')); ?>" class="form-horizontal" id="category-form" novalidate>
                        <?php echo e(csrf_field()); ?>


                        <div class="tab-content">
                            <div id="general-information" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id="id-field" class="hide">
                                            <?php echo e(Form::text('id', trans('category::attributes.id'), $errors, null, ['disabled' => true])); ?>

                                        </div>

                                        <?php echo e(Form::text('name', trans('category::attributes.name'), $errors, null, ['required' => true])); ?>

                                        <?php echo e(Form::checkbox('is_searchable', trans('category::attributes.is_searchable'), trans('category::categories.form.show_this_category_in_search_box'), $errors)); ?>

                                        <?php echo e(Form::checkbox('is_active', trans('category::attributes.is_active'), trans('category::categories.form.enable_the_category'), $errors)); ?>

                                    </div>
                                </div>
                            </div>

                            <?php if(auth()->user()->hasAccess('admin.media.index')): ?>
                                <div id="image" class="tab-pane fade">
                                    <div class="logo">
                                        <?php echo $__env->make('media::admin.image_picker.single', [
                                            'title' => trans('category::categories.form.logo'),
                                            'inputName' => 'files[logo]',
                                            'file' => (object) ['exists' => false],
                                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>

                                    <div class="banner">
                                        <?php echo $__env->make('media::admin.image_picker.single', [
                                            'title' => trans('category::categories.form.banner'),
                                            'inputName' => 'files[banner]',
                                            'file' => (object) ['exists' => false],
                                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div id="seo" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="hide" id="slug-field">
                                            <?php echo e(Form::text('slug', trans('category::attributes.slug'), $errors)); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-primary" data-loading>
                                    <?php echo e(trans('admin::admin.buttons.save')); ?>

                                </button>

                                <button type="button" class="btn btn-link text-red btn-delete p-l-0 hide" data-confirm>
                                    <?php echo e(trans('admin::admin.buttons.delete')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="overlay loader hide">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Modules/Category/Resources/views/admin/categories/index.blade.php ENDPATH**/ ?>