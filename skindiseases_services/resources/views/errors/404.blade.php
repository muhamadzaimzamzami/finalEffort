<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sofbox - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset ('core/images/favicon.ico')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset ('core/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset ('core/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset ('core/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset ('core/css/responsive.css')}}">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
            <div class="loader">
               <div class="cube">
                  <div class="sides">
                     <div class="top"></div>
                     <div class="right"></div>
                     <div class="bottom"></div>
                     <div class="left"></div>
                     <div class="front"></div>
                     <div class="back"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-sm-12 text-center">
                        <div class="iq-error">
                            <h1>400</h1>
                            <h4 class="mb-0">Oops! This Page is Not Found.</h4>
                            <p>The requested page dose not exist.</p>
                            <a class="btn btn-primary mt-3" href="{{route('dashboard.index')}}"><i class="ri-home-4-line"></i>Back to Home</a>
                            <img src="{{ asset ('core/images/error/01.png')}}" class="img-fluid iq-error-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset ('core/js/jquery.min.js')}}"></script>
      <script src="{{ asset ('core/js/popper.min.js')}}"></script>
      <script src="{{ asset ('core/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset ('core/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset ('core/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset ('core/js/waypoints.min.js')}}"></script>
      <script src="{{ asset ('core/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset ('core/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset ('core/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset ('core/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset ('core/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset ('core/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset ('core/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset ('core/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset ('core/js/lottie.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset ('core/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset ('core/js/custom.js')}}"></script>
   </body>
</html>