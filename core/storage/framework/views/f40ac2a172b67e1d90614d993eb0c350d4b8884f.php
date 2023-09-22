<?php
$content = content('roadmap.content');
[$elements] = element('roadmap.element')->chunk(3);


?>
    <section class="s-pt-100 s-pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="site-header  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h2 class="site-title"><?php echo e(__(@$content->data->title)); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row benefit-items-wrapper feature d-flex flex-column align-items-center">
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- <div class="col-xl-4 col-md-3 wow fadeInUp border-0 d-none  d-md-block " data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content ">
                            
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-4 col-md-5 wow fadeInUp border-bottom-0  text-sm-center text-center p-0 " data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item p-0">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content d-sm-inline-block d-inline-block d-md-block  mt-0" style="border:1px solid rgb(215, 118, 0); border-radius:10px; padding:15px 20px; box-shadow:inset 0 0px 66px #D7760047">
                            <h4 class="title"><?php echo e(__(@$element->data->card_title)); ?></h4>
                            <p class="mt-2"> <?php
                                echo clean(@$element->data->card_description);
                                ?></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-md-6 wow fadeInUp border-0 d-none p-0 d-md-block" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item p-0   d-flex justify-content-between align-items-center h-100  " style="width:calc(50% + 25px)">
                        <div class="w-100  " style="height: 0.5px;background-color:rgb(215, 118, 0);"></div>
                        <div class="benefit-content flex-grow-0 flex-shrink-0 mt-0   d-flex justify-content-center align-items-center" style="height: 50px;width:50px;border:1px solid rgb(215, 118, 0);">
                            <div class=" w-75 h-75 bg-info"></div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-4 col-md-4 wow fadeInUp border-0 d-none  d-md-block " data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            
                        </div>
                        <div class="benefit-content ">
                            
                        </div>
                    </div>
                </div> -->
                <?php if($key < 2): ?>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-0  p-0  d-block text-center" style="height: 2.5em;" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="d-inline-block h-100" style="border: 1px solid rgb(215, 118, 0);">

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-0  p-0  d-block  " data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="benefit-item p-0   d-flex justify-content-center align-items-center h-100  " >
                        <div class="benefit-content flex-grow-0 flex-shrink-0 mt-0   d-flex justify-content-center align-items-center" style="height: 45px;width:45px;border:1px solid rgb(215, 118, 0);">
                            <div class=" w-75 h-75 <?php if($key ==0): ?> bg-success <?php else: ?> bg-warning <?php endif; ?>"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp border-0  p-0  d-block text-center" style="height: 2.5em;" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="d-inline-block h-100" style="border: 1px solid rgb(215, 118, 0);">

                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

</section><?php /**PATH C:\Users\99451\Desktop\Scripts_v10\core\resources\views/frontend/sections/roadmap.blade.php ENDPATH**/ ?>