<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title','Əsas Səhifə'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('front/')); ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('front/')); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('front/')); ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img src="<?php echo e(asset('front/')); ?>/img/aviasiya.jpeg" style="width: 150px ; height:100px" alt="">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo e(route('index')); ?>" class="nav-item nav-link <?php echo e(Route::is('index') ? 'active' : ''); ?>">Əsas Səhifə</a>
                        <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link <?php echo e(Route::is('about') ? 'active' : ''); ?>">Haqqımızda</a>
                        <a href="<?php echo e(route('news')); ?>" class="nav-item nav-link <?php echo e(Route::is('news') ? 'active' : ''); ?>">Xəbərlər</a>
                        <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link <?php echo e(Route::is('contact') ? 'active' : ''); ?>">Ələqə</a>
                        <a href="<?php echo e(route('admin.login')); ?>" target="__blank" class="nav-item nav-link ">Giriş</a>
                        <a href="<?php echo e(route('admin.signup')); ?>" target="__blank" class="nav-item nav-link">Qeydiyyatdan Keç</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End --><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>