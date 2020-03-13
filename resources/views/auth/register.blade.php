<!doctype html>
<html lang="en">

<!-- Mirrored from themerail.com/html/Projekt/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2020 04:28:35 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Projekt</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/et-line.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/plyr.css" />
    <link rel="stylesheet" href="assets/css/flag.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <header class="header-2 access-page-nav">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="index.html"><img src="images/logo-2.png" alt=""></a>
              </div>
              <div class="top-nav">
                <a href="{{route('login')}}" class="account-page-link">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="padding-top-90 padding-bottom-90 access-page-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="access-form">
              <div class="form-header">
                <h5><i data-feather="edit"></i>Register Account</h5>
              </div>
              <form id="register-form" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="account-type">
                    <label for="idRegisterCan">
                        <input id="idRegisterCan" type="radio" name="status" value="0">
                        <span>Candidate</span>
                    </label>
                    <label for="idRegisterEmp">
                        <input id="idRegisterEmp" type="radio" name="status" value="1">
                        <span>Employer</span>
                    </label>
                    </div>

                <div class="form-group">
                  <input type="text" placeholder="First Name" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}"  autocomplete="fname" autofocus  data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup">

                @error('fname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror

                </div>

                <div class="form-group">
                    <input type="text" placeholder="Last Name" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}"  autocomplete="lname" autofocus  data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup">

                  @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                </div>

                <div class="form-group">
                  <input type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" data-parsley-type="email" data-parsley-trigger="keyup">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input id="phone_no" placeholder="Phone Number" type="phone_no" class="form-control @error("phone_no") is-invalid @enderror" name="phone_no" value="{{ old("phone_no") }}"  autocomplete="phone_no" data-parsley-type="number">

                    @error("phone_no")
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                  <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" data-parsley-length="[8,16]" data-parsley-trigger="keyup">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror

                </div>
                <div class="form-group">
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" data-parsley-equalto="#password" data-parsley-trigger="keyup">
                  </div>
                <div class="more-option terms">
                  <div class="mt-0 terms">
                    <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition" checked>
                    <label for="radio-4">
                      <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                    </label>
                  </div>
                </div>
                <button type="submit" class="button primary-bg btn-block">Register</button>
              </form>
              <div class="shortcut-login">
                <span>Or connect with</span>
                <div class="buttons">
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                  <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                </div>
                <p>Already have an account? <a href="login.html">Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.nstSlider.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="http://parsleyjs.org/dist/parsley.js"></script>

    <script type="text/javascript">
        $(function () {
          $('#register-form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          });
        });
        </script>

    <script src="js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>

<!-- Mirrored from themerail.com/html/Projekt/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2020 04:28:35 GMT -->
</html>
