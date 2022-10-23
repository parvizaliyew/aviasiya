

<?php $__env->startSection('content'); ?>
    
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Əlaqə</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="<?php echo e(route('index')); ?>">Əsas Səhifə</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="<?php echo e(route('contact')); ?>">Əlaqə</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">123 Street, New York, USA</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-envelope-open text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">info@example.com</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-phone-alt text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">+012 345 6789</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form   method="POST" action="<?php echo e(route('contact_post')); ?>" >
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Adınız" required="required" data-validation-required-message="Zəhmət olmasa Adnınızı daxil edin" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Emailinz" required="required" data-validation-required-message="Zəhmət olmasa Emailinizi daxil edin" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control"  name="title" id="subject" placeholder="Başlıq" required="required" data-validation-required-message="Zəhmət olmasa Başlığı daxil edin" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="msj" rows="6" id="message" placeholder="Mesajınız" required="required" data-validation-required-message="Zəhmət olmasa Messajınızı daxil edin"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Göndər</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/pages/contact.blade.php ENDPATH**/ ?>