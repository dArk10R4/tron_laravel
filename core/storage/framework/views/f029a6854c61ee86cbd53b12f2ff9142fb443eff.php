<?php
       $content = content('lucky.content');
   ?>


   <!-- about section start -->
   <section class="about-section sp_pt_120 sp_pb_120 overflow-hidden">
      <div class="about-section-el">
        <img src="<?php echo e(getFile('elements', 'el-2.png')); ?>" alt="image">
      </div>
      <div class="container">
        <div class="row gy-5 justify-content-between">
          
          <div class="col-lg-12 ps-xl-5 p-lg-4 about-content wow fadeInUp text-center" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="about-content">
              <h2 class="sp_site_title">Coming Soon !!!</h2>
              <h3 class="" id="timer"><?php echo e(__(@$content->data->title)); ?></h3>
              <p class="fs-lg mt-3">
                  <?php
                      echo clean(@$content->data->description);
                  ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->

<?php $__env->startPush('script'); ?>
<script>
$(
  function(){
    // Set the date we're counting down to

    var countDownDate = new Date("<?php echo e($content->data->time); ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      $('#timer').html(days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ");

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        $('#timer').html("Coming Soon");
      }
    }, 1000);
  }
)
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/theme4/sections/lucky.blade.php ENDPATH**/ ?>