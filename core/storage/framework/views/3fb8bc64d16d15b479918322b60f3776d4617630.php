   <?php
       $content = content('about.content');
   ?>


   <!-- about section start -->
   <section class="about-section sp_pt_120 sp_pb_120 overflow-hidden">
      <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
          <div class="col-lg-6 col-md-10">
            <div class="about-thumb">
              <img src="<?php echo e(getFile('about', @$content->data->image)); ?>" alt="image">
              <div class="line one"></div>
              <div class="line two"></div>
              <div class="line three"></div>
            </div>
          </div>
          <div class="col-lg-6 ps-xl-5 p-lg-4 about-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h2 class="sp_site_title"><?php echo e(__(@$content->data->title)); ?></h2>
            <p class="fs-lg mt-3">
                <?php
                    echo clean(@$content->data->description);
                ?>
            </p>
            <a href="<?php echo e(__(@$content->data->button_text_link)); ?>" class="btn main-btn mt-4"><?php echo e(__(@$content->data->button_text)); ?></a>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end --><?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/theme3/sections/about.blade.php ENDPATH**/ ?>