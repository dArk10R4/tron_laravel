

<?php $__env->startSection('content2'); ?>
    <div class="dashboard-body-part">

        <!-- <div class="mobile-page-header">
            <h5 class="title"><?php echo e(__('Apply Coupon')); ?></h5>
            <a href="<?php echo e(route('user.dashboard')); ?>" class="back-btn"><i class="bi bi-arrow-left"></i> <?php echo e(__('Back')); ?></a>
        </div> -->

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h4 class="mb-0"><?php echo e(__('Apply Coupon')); ?></h4>
                        <!-- <p class="mb-0">Current Balance :
                            <?php echo e(number_format(auth()->user()->balance, 2) . ' ' . $general->site_currency); ?></p> -->
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('Coupon Code')); ?></label>
                                <input type="text" name="code" id="refer-link" class="form-control"
                                    placeholder="Coupon Code" required>
                            </div>


                            <button type="submit" class="sp_theme_btn w-100" id="basic-addon2"><span><?php echo e(__('Apply Coupon')); ?></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/theme2/user/apply_coupon.blade.php ENDPATH**/ ?>