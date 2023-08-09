<?php $__env->startSection('content2'); ?>
    <div class="dashboard-body-part">

        <div class="mobile-page-header">
            <h5 class="title"><?php echo e(__('Payment Informations')); ?></h5>
            <a href="<?php echo e(route('user.deposit')); ?>" class="back-btn"><i class="bi bi-arrow-left"></i> <?php echo e(__('Back')); ?></a>
        </div>
        
        <div class="row gy-4">
            <div class="col-xxl-6 col-xl-5">
                <div class="site-card">
                    <div class="card-header text-center">
                        <h5><?php echo e(__('Payment Preview')); ?></h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group text-capitalize">

                            <?php if(!(session('type') == 'deposit')): ?>
                            <li class="list-group-item  d-flex justify-content-between">
                                <span class="fw-medium"><?php echo e(__('Plan Name')); ?>:</span>
                                <span><?php echo e($deposit->plan->plan_name); ?></span>
                            </li>
                            <?php endif; ?>
                            <li class="list-group-item  d-flex justify-content-between">
                                <span class="fw-medium"><?php echo e(__('Gateway Name')); ?>:</span>
                                <span><?php echo e($deposit->gateway->gateway_name); ?></span>
                            </li>
                            <li class="list-group-item  d-flex justify-content-between">
                                <span class="fw-medium"><?php echo e(__('Amount')); ?>:</span>
                                <span><?php echo e(number_format($deposit->amount, 2) . ' ' . @$general->site_currency); ?></span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span class="fw-medium"><?php echo e(__('Charge')); ?>:</span>
                                <span><?php echo e(number_format($deposit->charge, 2) . ' ' . @$general->site_currency); ?></span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span class="fw-medium"><?php echo e(__('Conversion Rate')); ?>:</span>
                                <span><?php echo e('1 ' . @$general->site_currency . ' = ' . number_format($deposit->rate, 2) . ' ' . @$general->site_currency); ?></span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span class="fw-medium"><?php echo e(__('Total Payable Amount')); ?>:</span>
                                <span><?php echo e(number_format($deposit->final_amount, 2) . ' ' . @$general->site_currency); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7">
                <div class="site-card">
                    <div class="card-body">
                        <form role="form" action="" method="post" class="require-validation" data-cc-on-file="false"
                            data-stripe-publishable-key="<?php echo e($gateway->gateway_parameters->stripe_client_id); ?>"
                            id="payment-form">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class='form-group col-md-12'>
                                    <div class='col-xs-12 required'>
                                        <label class='control-label mb-2'><?php echo e(__('Name on Card')); ?></label> <input
                                            class='form-control ' size='4' type='text'
                                            placeholder="<?php echo e(__('Enter name on card')); ?>">
                                    </div>
                                </div>

                                <div class='form-group col-md-12'>
                                    <div class='col-xs-12 required'>
                                        <label class='control-label mb-2 mt-2'><?php echo e(__('Card Number')); ?></label>
                                        <input autocomplete='off' class='form-control  card-number' size='20'
                                            type='text' placeholder="Enter card number">
                                    </div>
                                </div>

                                <div class='col-md-12'>
                                    <div class="row">
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label mb-2 mt-2'><?php echo e(__('CVC')); ?></label>
                                            <input autocomplete='off' class='form-control  card-cvc' size='4'
                                                type='text' placeholder="<?php echo e(__('CVC')); ?>">
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label
                                                class='control-label mb-2 mt-2'><?php echo e(__('Expiration Month')); ?></label>
                                            <input class='form-control  card-expiry-month' size='2'
                                                type='text' placeholder="<?php echo e(__('Expiration Month')); ?>">
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label
                                                class='control-label mb-2 mt-2 '><?php echo e(__('Expiration Year')); ?></label>
                                            <input class='form-control  card-expiry-year' size='4'
                                                type='text' placeholder="<?php echo e(__('Expiration Year')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class='col-md-12 error d-none'>
                                    <div class='alert-danger alert'>
                                        <?php echo e(__('Please correct the errors and try again.')); ?></div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-xs-12 d-grid gap-2">
                                    <button class="btn main-btn" type="submit"><span><?php echo e(__('Pay Now')); ?></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="https://js.stripe.com/v2/"></script>

    <script>
        'use strict'
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template().'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\codecanyon\hyip\hyip-v10\Scripts\core\resources\views/theme5/user/gateway/stripe.blade.php ENDPATH**/ ?>