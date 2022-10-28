

<?php $__env->startSection('title'); ?>
    Əsas Səhifə
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->index==0): ?> active <?php endif; ?>">
                    <img class="w-100" src="<?php echo e(asset($s->img)); ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4"><?php echo e($s->title); ?></h1>

                            <h4 class="text-white text-uppercase mb-md-3"><?php echo e($s->desc); ?> </h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
            </div>  
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row">
                <div class="col-lg-5 py-2">
                    <img class="img-fluid" src="<?php echo e($about->img); ?>" alt="" style="height: 350px;">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h1 class="text-secondary text-uppercase font-weight-medium mb-4">Haqqımızda</h1>
                    <h2 class="mb-4"><?php echo e($about->title); ?></h2>
                    <h5 class="font-weight-medium font-italic mb-4"><?php echo e($about->desc); ?></h5>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Müəllimlər</h1>
            <div class="owl-carousel testimonial-carousel">
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="<?php echo e(asset($t->img)); ?>" style="width: 150px; height: 150px; padding: 12px; margin-bottom: -70px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0" style="height: 250px; display:flex; flex-direction: column; justify-content:center">
                        <h5 class="font-weight-medium mt-5"><?php echo e($t->name); ?> <?php echo e($t->surname); ?></h5>
                        <p class="text-muted font-italic"><?php echo e($t->getKafedra->name); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid mt-5 pb-2">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Son Xəbərlər</h1>
            <div class="row">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4" style="max-height: 370px;height:100%">
                        <div class="position-relative">
                            <img class="img-fluid w-100" style="height: 250px" src="<?php echo e(asset($n->img)); ?>" alt="">
                            <a href="<?php echo e(route('single',$n->id)); ?>" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3"><?php echo e($n->title); ?></h4>
                                
                            </a>
                        </div>
                        <p class="m-0 p-4"><?php echo e(Str::limit($n->desc,100,'...')); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('news')); ?>" style="margin: 0 auto" class="btn btn-primary">Ətraflı</a>
            </div>
        </div>
    </div>
    <!-- Blog End -->


 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/index.blade.php ENDPATH**/ ?>