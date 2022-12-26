<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('auth/assets/assets/')}}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('auth/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('auth/assets/vendor/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ asset('auth/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('auth/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('auth/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('auth/assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('auth/assets/vendor/js/helpers.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">

              <h4 class="mb-4 text-center">Registration Form</h4>

              <form id="formAuthentication" class="mb-3" action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your name" autofocus />

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @if(Session::has('error'))
                      <span class="text-danger" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                      </span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" autofocus />

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @if(Session::has('error'))
                      <span class="text-danger" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                      </span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="01810000000" autofocus />

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @if(Session::has('error'))
                      <span class="text-danger" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                      </span>
                    @endif
                </div>


                <div class="mb-3 form-password-toggle">

                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('apps.login') }}">
                        <small>Already have an account? Login Now</small>
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
                </div>
              </form>

              {{-- <p class="text-center">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p> --}}
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('auth/assets/vendor/libs/jquery/jquery.js') }}"></script>
    {{-- <script src="{{ asset('auth/assets/vendor/libs/popper/popper.js') }}"></script> --}}
    <script src="{{ asset('auth/assets/vendor/js/bootstrap.js') }}"></script>
    {{-- <script src="{{ asset('auth/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('auth/assets/vendor/js/menu.js') }}"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('auth/assets/js/main.js') }}"></script>

  </body>
</html>
