<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Aziz</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('/') }}assets/plugin/fontawesome/css/all.min.css" rel="stylesheet">
    </head>
  <body>

    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('dist/img/logo3.png') }}" width="70px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> <!-- Add justify-content-end class here -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ url('login') }}" class="btn btn-success ml-lg-2"><i class="fas fa-sign-in-alt"></i> Log In</a> <!-- Add classes here -->
              </li>
            </ul>
          </div>
        </div>
      </nav>




      {{-- Nav --}}

      {{-- content --}}
      <div class="mt-2">
        <div class="container">
          @yield('content')
        </div>
      </div>
      {{-- content --}}
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    {{-- footer --}}
      <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Laravel Aziz</h5>
                    <p>Testing</p>

                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> The Providers</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> The Providers</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful Links</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> The Providers</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> The Providers</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Contact </h5>
                    <p>
                        <i class="fas fa-home mr-3"> </i> Jakarta
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8 ">
                    <p> Copyright @2023 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-warning">The Providers</strong>
                        </a>
                    </p>

                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/sulthan.rofi" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/m_aziz_sr/" class="btn-floating btn-sm text-white" style="font-size: 23px">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </footer>

    {{-- footer --}}

  </body>
</html>
