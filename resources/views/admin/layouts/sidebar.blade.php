<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Admin Panel')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('manager/') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('manager/') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('manager/') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('manager/') }}/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="{{ asset('manager/') }}/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="{{ asset('manager/') }}/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ asset('manager/') }}/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }} {{ Auth::user()->lname }}</h5>
                @php
                $user=App\Models\User::with('roles')->find(auth()->user()->id);
                $user=$user->roles->pluck('name')->first();
                @endphp
                  <span>{{ strtoupper ($user) }}</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Admin Panel</span>
            </a>
          </li>
          @role('admin')
          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.slider.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-image-filter"></i>
              </span>
              <span class="menu-title">Slayder</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.about') }}">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-text"></i>
              </span>
              <span class="menu-title">Haqq??nda</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.news.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-newspaper"></i>
              </span>
              <span class="menu-title">X??b??rl??r</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.kafedra.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-library"></i>
              </span>
              <span class="menu-title">Kafedra</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.dekanat.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-bookmark"></i>
              </span>
              <span class="menu-title">Dekanat</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.teacher.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-book-open-page-variant"></i>
              </span>
              <span class="menu-title">M????llim</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.group.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
              <span class="menu-title">Qrup</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.lesson.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-information"></i>
              </span>
              <span class="menu-title">D??rsl??r</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.exam.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-biohazard"></i>
              </span>
              <span class="menu-title">??mtahan bal??</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.mesaj.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-facebook-messenger"></i>
              </span>
              <span class="menu-title">Mesajlar</span>
            </a>
          </li>

          
          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.setting.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
              <span class="menu-title">Ayarlar</span>
            </a>
          </li>

          @endrole
          <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('admin.profil') }}">
              <span class="menu-icon">
                <i class="mdi mdi-account-star"></i>
              </span>
              <span class="menu-title">Profil</span>
            </a>
          </li>

         @role('t??l??b??')
         <li class="nav-item menu-items">
          <a class="nav-link " href="{{ route('admin.result') }}">
            <span class="menu-icon">
              <i class="mdi mdi-biohazard"></i>
            </span>
            <span class="menu-title">Imtahan N??tic??si</span>
          </a>
        </li>
         @endrole
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">