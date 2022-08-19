<!DOCTYPE html>
<html lang="en">
<head>
    <title>@if($title) {{$title}} @else {{get_option('site_title')}} @endif</title>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--============== Bootstrap plugin Must Include ============-->
    <link rel="stylesheet" href="{{asset('public/member/css/bootstrap.min.css')}}">
    <!--========== Google Font For Site Font ===============-->
    <!--================= Font Icon For Set icon in page Must Include ===================-->
    <link rel="stylesheet" href="{{asset('public/member/css/icon/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/member/css/icon/icofont/icofont.css')}}">
    <!--============ Plugin ================-->
    <link rel="stylesheet" href="{{asset('public/member/css/jquery.directional-hover.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/member/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
@yield('css')
    <!--============ Custom Css ==================-->
    <link rel="stylesheet" href="{{asset('public/member/css/custom-default.css')}}">
    <link rel="stylesheet" href="{{asset('public/member/css/main.css')}}">

<script>
function showDiv(divId, element)
    {
    document.getElementById(divId).style.display = element.value != 1 ? 'block' : 'none';
    }
</script>
<style>
    #hidden_div {
    display: none;
    }
</style>
</head>
<body class="user-body">
<!--======== Navbar =============-->
@include('frontend.commom.header')
@yield('content')
<!--============= Footer ==============-->
@include('frontend.commom.footer')
<!--===================== Script Must include =========================-->
<script type="text/javascript" src="{{asset('public/member/js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/member/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/member/js/bootstrap.min.js')}}"></script>

<!--============== Plugin ======================-->
<script type="text/javascript" src="{{asset('public/member/js/jquery.directional-hover.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/member/js/owl.carousel.js')}}"></script>

<!--====== Custom Js / Must Include =============-->
<script type="text/javascript" src="{{asset('public/member/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('public/member/js/partial/index.js')}}"></script>

<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.all.js')}}"></script>

@yield('js')

<script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>

@if(Session::has('message'))
    <script src="{{asset('assets/dist/js/notification.js')}}"></script>
@endif

<input type="hidden" id="base_url" value="{{url('/')}}">
@if(get_option('mailchimp_subscription') == 1)
    <script type="text/javascript" src="{{asset('public/frontend/js/partial/mailchimp-subscription.js')}}"></script>
@endif

</body>
</html>
