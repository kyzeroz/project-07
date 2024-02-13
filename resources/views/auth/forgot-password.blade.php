<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('authen/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('authen/img/favicon.png')}}">
  <title>
    Forgot
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('authen/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('authen/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('authen/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="bg-gray-200">

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('password.email') }}">
        @csrf

  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Forgot</h4>
                  <h6 class="text-white font-weight-bolder text-center mt-2 mb-0"> Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>

                  <div class="row mt-3">


                  </div>
                </div>
              </div>

              <div class="card-body">
                <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                <form  class="text-start"method="POST" action="{{ route('login') }}">

                  <div class="input-group input-group-outline my-3" data-validate= "Please enter Username">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                  </div>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" text-danger/>


            <div class="container-login100-form-btn">
                  <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbth"></div>
                    <button class="btn bg-gradient-primary w-100 my-4 mb-2"> Email Password Reset Link</button>
                  </div>
            </div>

                <div class="flex-col-c p-t-50">
                  <p class="mt-4 text-sm twext-center">
                    Already have an account?
                    <a href="{{ route('login')}}" class="txt3" >Sign in</a>
                  </p>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('authen/js/core/popper.min.js')}}"></script>
  <script src="{{asset('authen/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('authen/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('authen/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('authen/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</form>
</div>
</div>
</div>

</body>

</html>
