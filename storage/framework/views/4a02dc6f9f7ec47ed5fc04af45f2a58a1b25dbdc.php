

<?php $__env->startSection('title', trans('storefront::checkout.checkout')); ?>

<?php $__env->startSection('content'); ?>
    <checkout-create
        customer-email="<?php echo e(auth()->user()->email ?? null); ?>"
        :gateways="<?php echo e($gateways); ?>"
        :countries="<?php echo e(json_encode($countries)); ?>"
        inline-template
    >
        <section class="checkout-wrap">
            <div class="container">

                
                <div class="text-bg">
                    <h2 class="text-center">Checkout</h2>
                </div>

                <form @submit.prevent="placeOrder" @input="errors.clear($event.target.name)">
                    <div class="checkout">
                        <div class="checkout-inner">
                            <div class="checkout-left">
                                <div class="checkout-form">
                                    <?php echo $__env->make('public.checkout.create.form.account_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('public.checkout.create.form.billing_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('public.checkout.create.form.shipping_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('public.checkout.create.form.order_note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>

                            <div class="checkout-right">
                                <?php echo $__env->make('public.checkout.create.payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('public.checkout.create.coupon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <?php echo $__env->make('public.checkout.create.order_summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </form>
            </div>
        </section>
    </checkout-create>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('pre-scripts'); ?>
    <?php if(setting('paypal_enabled')): ?>
        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo e(setting('paypal_client_id')); ?>&currency=<?php echo e(setting('default_currency')); ?>&disable-funding=credit,card,venmo,sepa,bancontact,eps,giropay,ideal,mybank,p24,p24"></script>
    <?php endif; ?>

    <?php if(setting('stripe_enabled')): ?>
        <script src="https://js.stripe.com/v3/"></script>
    <?php endif; ?>

    <?php if(setting('razorpay_enabled')): ?>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/checkout/create.blade.php ENDPATH**/ ?>