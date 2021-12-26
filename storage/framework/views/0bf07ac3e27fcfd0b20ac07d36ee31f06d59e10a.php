<?php if(setting('newsletter_enabled')): ?>
    <newsletter-subscription inline-template>
        <section class="subscribe-wrap d-flex justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-14 col-lg-18">
                        <div class="subscribe">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-18">
                                    <div class="subscribe-text">
                                        <span class="title">
                                            <?php echo e(trans('storefront::layout.subscribe_to_our_newsletter')); ?>

                                        </span>

                                        <span class="sub-title">
                                            <?php echo e(trans('storefront::layout.subscribe_to_our_newsletter_subtitle')); ?>

                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-18">
                                    <div class="subscribe-field">
                                        <form @submit.prevent="subscribe">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    v-model="email"
                                                    class="form-control"
                                                    placeholder="<?php echo e(trans('storefront::layout.enter_your_email_address')); ?>"
                                                >

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-subscribe"
                                                    v-if="subscribed"
                                                    v-cloak
                                                >
                                                    <i class="las la-check"></i>
                                                    <?php echo e(trans('storefront::layout.subscribed')); ?>

                                                </button>

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-subscribe"
                                                    :class="{ 'btn-loading': subscribing }"
                                                    v-else
                                                    v-cloak
                                                >
                                                    <?php echo e(trans('storefront::layout.subscribe')); ?>

                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </newsletter-subscription>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/home/sections/subscribe.blade.php ENDPATH**/ ?>