<section class="home-section-wrap">
    <div class="container">
        <div class="row">
            <div class="home-section-inner">

                <div class="home-slider-wrap">
                    <div
                        class="home-slider"
                        data-speed="<?php echo e($slider->speed ?? '1000'); ?>"
                        data-autoplay="<?php echo e($slider->autoplay ?? 'false'); ?>"
                        data-autoplay-speed="<?php echo e($slider->autoplay_speed ?? '5000'); ?>"
                        data-fade="<?php echo e($slider->fade ?? 'false'); ?>"
                        data-dots="<?php echo e($slider->dots ?? 'true'); ?>"
                        data-arrows="<?php echo e($slider->arrows ?? 'true'); ?>"
                    >
                        <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slide">
                                <img src="<?php echo e($slide->file->path); ?>" data-animation-in="zoomInImage" class="slider-image animated">

                                <div class="slide-content <?php echo e($slide->isAlignedLeft() ? 'align-left' : 'align-right'); ?>">
                                    <div class="captions">
                                        <span
                                            class="caption caption-1"
                                            data-animation-in="<?php echo e(data_get($slide->options, 'caption_1.effect', 'fadeInRight')); ?>"
                                            data-delay-in="<?php echo e(data_get($slide->options, 'caption_1.delay', '0')); ?>"
                                        >
                                            <?php echo $slide->caption_1; ?>

                                        </span>

                                        <span
                                            class="caption caption-2"
                                            data-animation-in="<?php echo e(data_get($slide->options, 'caption_2.effect', 'fadeInRight')); ?>"
                                            data-delay-in="<?php echo e(data_get($slide->options, 'caption_2.delay', '0.3')); ?>"
                                        >
                                            <?php echo $slide->caption_2; ?>

                                        </span>

                                        <?php if($slide->call_to_action_text): ?>
                                            <a
                                                href="<?php echo e($slide->call_to_action_url); ?>"
                                                class="btn btn-primary btn-slider"
                                                data-animation-in="<?php echo e(data_get($slide->options, 'call_to_action.effect', 'fadeInRight')); ?>"
                                                data-delay-in="<?php echo e(data_get($slide->options, 'call_to_action.delay', '0.7')); ?>"
                                                target="<?php echo e($slide->open_in_new_window ? '_blank' : '_self'); ?>"
                                            >
                                                <?php echo $slide->call_to_action_text; ?>

                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <?php echo $__env->make('public.home.sections.slider_banners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/home/sections/slider.blade.php ENDPATH**/ ?>