

<?php $__env->startSection('title', trans('storefront::account.pages.my_wishlist')); ?>

<?php $__env->startSection('account_breadcrumb'); ?>
    <li class="active"><?php echo e(trans('storefront::account.pages.my_wishlist')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel'); ?>
    <my-wishlist inline-template>
        <div class="panel">
            <div class="panel-header">
                <h4><?php echo e(trans('storefront::account.pages.my_wishlist')); ?></h4>
            </div>

            <div class="panel-body" :class="{ loading: fetchingWishlist }" v-cloak>
                <div class="empty-message" v-if="wishlistIsEmpty">
                    <h3 v-if="! fetchingWishlist">
                        <?php echo e(trans('storefront::account.wishlist.empty_wishlist')); ?>

                    </h3>
                </div>

                <div class="table-responsive" v-else>
                    <table class="table table-borderless my-wishlist-table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('storefront::account.image')); ?></th>
                                <th><?php echo e(trans('storefront::account.product_name')); ?></th>
                                <th><?php echo e(trans('storefront::account.wishlist.price')); ?></th>
                                <th><?php echo e(trans('storefront::account.wishlist.availability')); ?></th>
                                <th><?php echo e(trans('storefront::account.action')); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr v-for="product in products.data" :key="product.id">
                                <td>
                                    <div class="product-image">
                                        <img :src="baseImage(product)" :class="{ 'image-placeholder': ! hasBaseImage(product) }" alt="product-image">
                                    </div>
                                </td>

                                <td>
                                    <a :href="productUrl(product)" class="product-name">
                                        {{ product.name }}
                                    </a>
                                </td>

                                <td>
                                    <span class="product-price" v-html="product.formatted_price"></span>
                                </td>

                                <td>
                                    <span class="badge badge-success" v-if="product.is_in_stock">
                                        <?php echo e(trans('storefront::account.wishlist.in_stock')); ?>

                                    </span>

                                    <span class="badge badge-danger" v-else>
                                        <?php echo e(trans('storefront::account.wishlist.out_of_stock')); ?>

                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-delete" @click="remove(product)">
                                        <i class="las la-trash"></i>
                                        <?php echo e(trans('storefront::account.wishlist.delete')); ?>

                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel-footer">
                <v-pagination
                    :total-page="totalPage"
                    :current-page="currentPage"
                    @page-changed="fetchProducts"
                    v-if="products.total > 20"
                >
                </v-pagination>
            </div>
        </div>
    </my-wishlist>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/wishlist/index.blade.php ENDPATH**/ ?>