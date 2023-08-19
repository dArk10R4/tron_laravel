<?php
$content = content('newsletter.content');
?>

<section class="subscribe-section">
    <div class="subscribe-el">
        <img src="<?php echo e(getFile('elements', 'paper-plane.png')); ?>" alt="image">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="site-header">
                    <h2 class="site-title"><?php echo e(__(@$content->data->title)); ?></h2>
                    <p><?php echo e(__(@$content->data->short_description)); ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form class="subscribe-form" id="subscribe" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="email" class="form-control subscribe-email"
                        placeholder="<?php echo e(__('Enter email here')); ?>">
                    <button><?php echo e(__('Subscribe')); ?> <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/frontend/sections/newsletter.blade.php ENDPATH**/ ?>