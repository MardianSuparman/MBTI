

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>diigo</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('assets/front/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets/front/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->

      @yield('style')

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('assets/front/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         @include('layouts.user.nav')
      </header>
      <!-- end banner -->

      @yield('content')

      <!--  footer -->
      <footer>
         @include('layouts.user.footer')
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/front/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('assets/front/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('assets/front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('assets/front/js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
   </body>
</html>

