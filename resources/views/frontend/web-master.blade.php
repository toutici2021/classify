<!DOCTYPE html>
<html lang="en">
<head>
    <title> @if(isset($meta['meta_title']) && $meta['meta_title']!='') {{$meta['meta_title']}} @else {{get_option('site_title')}}  @endif </title>
    <meta name="description" content="@if(isset($meta['meta_description']) && $meta['meta_description']!='') {{$meta['meta_description']}} @endif">
    @if(isset($meta['meta_keywords']) AND $meta['meta_keywords'] != null)
        <meta name="keywords" content="{{$meta['meta_keywords']}}">
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--============== Bootstrap plugin Must Include ============-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <!--========== Google Font For Site Font ===============-->
    <!--================= Font Icon For Set icon in page Must Include ===================-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/icon/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/icon/icofont/icofont.css')}}">
    <!--============ Plugin ================-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
    <!--============ Custom Css ==================-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom-default.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
    @yield('css')
</head>
<body>
<!--======== Navbar =============-->
@include('frontend.commom.header')
@yield('content')
<!--============= Footer ==============-->
@include('frontend.commom.footer')
<!--===================== Script Must include =========================-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>

<!--============== Plugin ======================-->
<script type="text/javascript" src="{{asset('public/frontend/js/owl.carousel.js')}}"></script>

<!--====== Custom Js / Must Include =============-->
<script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/partial/index.js')}}"></script>
<script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
@if(Session::has('message'))
    <script src="{{asset('assets/dist/js/notification.js')}}"></script>
@endif
<input type="hidden" id="base_url" value="{{url('/')}}">
@if(get_option('mailchimp_subscription') == 1)
    <script type="text/javascript" src="{{asset('public/frontend/js/partial/mailchimp-subscription.js')}}"></script>
@endif

@yield('js')
</body>
</html>
