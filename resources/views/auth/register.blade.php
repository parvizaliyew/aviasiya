<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giriş</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('manager/') }}/assets/vendors/mdi/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="{{ asset('manager/') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('manager/') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('manager/') }}/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Qeydiyyatdan Keçin</h3>
                <form action="{{ route('admin.signup_post') }}" method="POST" id="loginForm">
                  @csrf
                  <div class="form-group">
                    <label for="name">Ad *</label>
                    <input type="text" name="name" id="name" class="form-control p_input">
                  </div>

                  @error('name')
                  <span class="text-danger mt-2">{{ $message }}</span> <br>
                  @enderror

                  <div class="form-group">
                    <label for="lname">Soyad *</label>
                    <input type="text" name="lname" id="lname" class="form-control p_input">
                  </div>

                  @error('lname')
                  <span class="text-danger mt-2">{{ $message }}</span> <br>
                  @enderror

                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="text" name="email" id="email" class="form-control p_input">
                  </div>
                  @error('email')
                  <span class="text-danger mt-2">{{ $message }}</span> <br>
                  @enderror

                  <div class="form-group">
                    <label for="group">Qrup *</label> <br>
                    <select name="group" id="group">
                        <option value="">693</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="password">Şifrə *</label>
                    <input type="text" id="password" name="password" class="form-control p_input">
                  </div>
                  @error('password')
                  <span class="text-danger mt-2">{{ $message }}</span> <br>
                  @enderror
                  <div class="form-group">
                    <label for="password_ver">Şifrəni Təkrarla *</label>
                    <input type="text" id="password_ver" name="password_ver" class="form-control p_input">
                  </div>
                  @error('password_ver')
                  <span class="text-danger mt-2">{{ $message }}</span> <br>
                  @enderror
                  <div class="text-center">
                    <button id="submit" type="submit"  class="btn btn-primary btn-block enter-btn">Göndər</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('manager/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('manager/') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('manager/') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('manager/') }}/assets/js/misc.js"></script>
    <script src="{{ asset('manager/') }}/assets/js/settings.js"></script>
    <script src="{{ asset('manager/') }}/assets/js/todolist.js"></script>
    <!-- endinject -->

  </body>
</html>