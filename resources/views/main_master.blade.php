<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <meta name="csrf-token" content="bWr12P5VhEo5Tjw3TAWq2A3GfPQyHJitJj0wqdMG">
    <meta name="app-url" content="//www.availablesarees.com/">
    <meta name="file-base-url" content="//www.availablesarees.com/public/">
    <meta itemprop="thumbnailUrl" content="https://www.availablesarees.com/public/frontend/assets/images/slider/available_sarees.png" />
    <link rel="image_src" href="https://www.availablesarees.com/public/frontend/assets/images/slider/available_sarees.png" />
    <meta name="robots" content="max-image-preview:large" />
    <meta itemprop="url" content="https://www.availablesarees.com/">
    <meta itemprop="inLanguage" content="ta" />
    <meta itemprop="author" content="Available Sarees" />
    <meta property="og:site_name" content="availablesarees.com" />
    <meta property="og:url" content="https://www.availablesarees.com/" />
    <meta property="og:title" content="Available Sarees" />
    <meta property="og:description" content="Available Sarees" />
    <meta property="og:image" content="https://www.availablesarees.com/public/frontend/assets/images/slider/available_sarees.png" />
    <meta property="og:image:url" content="https://www.availablesarees.com/public/frontend/assets/images/slider/available_sarees.png">
    <meta property="og:image:type" content="text/html">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
    <meta property="og:type" content="website">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Available Sarees">
    <meta itemprop="description" content="Available Sarees">
    <meta itemprop="image" content="https://www.availablesarees.com/public/frontend/assets/images/slider/available_sarees.png">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.availablesarees.com/public/frontend/assets/images/slider/available_sarees.png">
    <title>Available Sarees | All Products</title>
    <!-- All CSS is here
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/signericafat.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/cerebrisans.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/elegant.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/linear-icon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lora:ital@1&family=Mystery+Quest&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Mystery+Quest&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  </head>
  <body class="cnt-home">
    <div class="main-wrapper">
      <div class="container-full">
        <a href="/">
          <img src="{{ asset('frontend/assets/images/slider/available_sarees.png') }}" class="img-fluid" title="Available Sarees" alt="">
        </a>
      </div> @yield('content')
    </div>
  </body>
  <!-- All JS is here -->
  <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/slick.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/jquery.instagramfeed.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/jquery.nice-select.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/wow.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/jquery-ui-touch-punch.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/jquery-ui.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/sticky-sidebar.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/easyzoom.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/scrollup.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/plugins/ajax-mail.js')}}"></script>
  <!-- Main JS -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/sort.js')}}"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    })
  </script>
</html>