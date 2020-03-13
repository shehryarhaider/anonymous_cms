<!doctype html>
<html lang="en">

<!-- Mirrored from themerail.com/html/Projekt/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2020 04:23:24 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('title')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/themify-icons.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/et-line.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/plyr.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/flag.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{url('')}}/assets/css/jquery.nstSlider.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/dashboard_links/css/dashboard.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="#">
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">

  </head>
  <body>
    @include('layouts.header')
    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              @yield('content')
              @include('layouts.sidebar')
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('')}}/assets/js/popper.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/feather.min.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.nstSlider.min.js"></script>
    <script src="{{url('')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/assets/js/visible.js"></script>
    <script src="{{url('')}}/assets/js/jquery.countTo.js"></script>
    <script src="{{url('')}}/assets/js/chart.js"></script>
    <script src="{{url('')}}/assets/js/plyr.js"></script>
    <script src="{{url('')}}/assets/js/tinymce.min.js"></script>
    <script src="{{url('')}}/assets/js/slick.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="{{url('')}}/js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="{{url('')}}/js/map.js"></script>
  </body>

</html>
