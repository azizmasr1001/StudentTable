<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty($header_title) ? $header_title : '' }} - King Aziz</title>
  <link rel="icon" type="image" href="{{ url('dist/img/logo3.png')}}">


  <!-- Css For Pagination-->
  <link rel="stylesheet" href="{{ url('dist/css/pagination.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/> --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    #scroll-to-top {
  display: none; /* Hide the button by default */
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  cursor: pointer;
  position: fixed;
  background-color: #555;
  color: white;
  padding: 10px;
  border-radius: 50%;
  opacity: 0.8;
}

#scroll-to-top:hover {
  background-color: #444;
  opacity: 1;
}



  </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->


<body class="hold-transition sidebar-mini">
<div class="wrapper fixed-top">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ url('dist/img/logo3.png') }}" alt="AdminLTELogo" height="60" width="60">
      </div>
  <!-- Navbar -->
  @include('layouts.header')

    @yield('content')
  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ url('dist/js/adminlte.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<!-- OPTIONAL SCRIPTS -->
<script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('dist/js/pages/dashboard3.js') }}"></script>

<!-- Script For Back to top Button-->

<script>
    $(document).ready(function() {
      // Show or hide the button based on the user's scroll position
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('#scroll-to-top').fadeIn();
        } else {
          $('#scroll-to-top').fadeOut();
        }
      });

      // Scroll to the top of the page when the button is clicked
      $('#scroll-to-top').click(function() {
        $('html, body').animate({scrollTop : 0},800);
        return false;
      });
    });

  </script>
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#button-submit').on('click', function() {
        $value = $('#input').val();
        $('#content-box').append(`
            <div class="mb-2">
                <div class="float-right px-3 py-2" style="width: 270px; background: #4acfee;border-radius:10px;float-right; font-size: 85%;">
                    ` + $value + `
                </div>
                <div style="clear:both;"></div>
            </div>`);

        $.ajax({
            type: 'post',
            url: '{{url('send')}}',
            data: {
                'input': $value
            },
            success: function(data){
                $('#content-box').append(`<div class="d-flex mb-2">
                <div class="mr-2" style="width: 45px;height: 45px;">
                    <img src="dist/img/bot1.jpg" width="100%" height="100%" style="border-radius: 50px;">
                </div>
                <div class="text-white px-3 py-2"
                    style="width: 270px; background: #13254b; border-radius: 10px; font-size: 85%;">
                    `+data+`
                </div>
            </div>`)
            $value = $('#input').val('');
            }
        })
    });
</script>
<!-- Script For Back to top Button-->

<!-- Script For Burger Bar Button-->

  <!-- Script For Burger Bar Button-->
</body>
</html>
