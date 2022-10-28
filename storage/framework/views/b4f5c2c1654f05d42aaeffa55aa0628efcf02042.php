

<?php $__env->startSection('content'); ?>
    


    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Haqqımızda</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="<?php echo e(route('index')); ?>">Əsas Səhifə</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Haqqımızda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="d-flex">
                <div class="col-lg-5 py-2">
                    <img class="img-fluid" style="height: 350px" src="<?php echo e($about->img); ?>" alt="">
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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/about.blade.php ENDPATH**/ ?>