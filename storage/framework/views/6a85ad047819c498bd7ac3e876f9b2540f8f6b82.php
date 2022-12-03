   <!-- Footer Start -->
   <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5" style="display: flex; justify-content:space-between">
        <div class="col-lg-3 col-md-6 mb-5">
            <img src="<?php echo e(asset('front/')); ?>/img/aviasiya.jpeg" style="width: 150px ; height:100px" alt="">
            <p></p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;"  target="__blank" href="<?php echo e($setting->tw); ?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" target="__blank" href="<?php echo e($setting->fb); ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" target="__blank" href="<?php echo e($setting->ln); ?>"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" target="__blank" href="<?php echo e($setting->ins); ?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Əlaqə</h4>
            <p><?php echo e($setting->desc); ?></p>
            <p><i class="fa fa-map-marker-alt mr-2"></i><?php echo e($setting->adress); ?></p>
            <p><i class="fa fa-phone-alt mr-2"></i><?php echo e($setting->number); ?></p>
            <p><i class="fa fa-envelope mr-2"></i><?php echo e($setting->email); ?></p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="<?php echo e(route('index')); ?>"><i class="fa fa-angle-right mr-2"></i>Əsas Səhifə</a>
                <a class="text-white mb-2" href="<?php echo e(route('about')); ?>"><i class="fa fa-angle-right mr-2"></i>Haqqımızda</a>
                <a class="text-white mb-2" href="<?php echo e(route('news')); ?>"><i class="fa fa-angle-right mr-2"></i>Xəbərlər</a>
                <a class="text-white mb-2" href="<?php echo e(route('contact')); ?>"><i class="fa fa-angle-right mr-2"></i>Əlaqə</a>
            </div>
        </div>  
</div>
<div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-white">
        &copy; <a class="text-white font-weight-medium" href="#">Aviasiya</a>. Müəllif hüquqları qorunur. by
        <a class="text-white font-weight-medium" href="https://htmlcodex.com">Aliyev Parviz</a>
    </p>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('front/')); ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo e(asset('front/')); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo e(asset('front/')); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php echo e(asset('front/')); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="<?php echo e(asset('front/')); ?>/mail/jqBootstrapValidation.min.js"></script>
<script src="<?php echo e(asset('front/')); ?>/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?php echo e(asset('front/')); ?>/js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\Parviz\Desktop\aviasiya\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>