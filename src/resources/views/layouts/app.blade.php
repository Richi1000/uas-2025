<!DOCTYPE html>
<html lang="en">
<head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      
        <!--====== Title ======-->
        <title>Business | Bootstrap 5 Business Template</title>
      
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset ('assets4/images/favicon.svg')}}" type="image/svg" />
      
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset ('assets4/css/bootstrap.min.css')}}" />
      
        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="{{ asset ('assets4/css/lineicons.css')}}" />
      
        <!--====== Tiny Slider css ======-->
        <link rel="stylesheet" href="{{ asset ('assets4/css/tiny-slider.css')}}" />
      
        <!--====== gLightBox css ======-->
        <link rel="stylesheet" href="{{ asset ('assets4/css/glightbox.min.css')}}" />
      
        <link rel="stylesheet" href="{{ asset ('assets4/css/style.css')}}" />
</head>
<body>
    
    @include('partials.navbar')
    @include('partials.sidebar')
    
    @yield('content')

    @include('partials.footer')
    @include('partials.script')

</body>
</html>
