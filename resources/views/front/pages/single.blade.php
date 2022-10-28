@extends('front.layouts.master')

@section('title')
    {{ $news->title }}
@endsection

@section('content')
       <!-- Page Header Start -->
       <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Xəbər</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="{{ route('index') }}">Əsas Səhifə</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">    {{ $news->title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-12">
               

                <div class="mb-5">
                    
                    <h2 class="mb-4">{{ $news->title }}</h2>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="{{asset($news->img)}}" alt="Image">
                    <p>{{ $news->desc }}</p>
                </div>

                <!-- Related Post Start -->
               
                <!-- Comment Form End -->
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End --> 
@endsection



   