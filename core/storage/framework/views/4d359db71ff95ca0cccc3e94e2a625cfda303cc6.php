   <?php
       $content = content('about.content');
   ?>

<section id="about" class="about-section s-pt-100 s-pb-100 separator-bg">
    <div class="about-globe">
        <img src="<?php echo e(getFile('bg','globe3.png')); ?>" alt="image">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-lg-block d-none">
                <div class="about-thumb">
                    <img src="<?php echo e(getFile('about', @$content->data->image)); ?>" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="sp_site_title"><?php echo e(__(@$content->data->title)); ?></h2>
                <p class="text-white text-justifys descripton-root">
                    <?php
                    echo clean(@$content->data->description);
                    ?>
                </p>
                <a href="<?php echo e(__(@$content->data->button_text_link)); ?>" class="sp_theme_btn"><?php echo e(__(@$content->data->button_text)); ?></a>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/theme2/sections/about.blade.php ENDPATH**/ ?>