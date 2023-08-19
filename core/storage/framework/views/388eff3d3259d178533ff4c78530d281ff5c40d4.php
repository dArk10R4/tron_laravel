<?php
       $content = content('lucky.content');
   ?>


<!-- about section start -->
<section id="about" class="about-section s-pt-100 s-pb-100 dark-bg">
    <div class="shape-el">
        <img src="<?php echo e(getFile('about', 'flow-chart.png')); ?>" alt="image">
    </div>
    <div class="container">
    <div class="row align-items-center">
        
        <div class="col-lg-12 text-center">
            <h2 class="site-title">Coming Soon !!!</h2>
            <h3 style="font-size:24px;" id="timer"><?php echo e(__(@$content->data->title)); ?></h3>
            <p class="text-white text-justifys descripton-root">
                <?php
                    echo clean(@$content->data->description);
                ?>
            </p>
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
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/frontend/sections/lucky.blade.php ENDPATH**/ ?>