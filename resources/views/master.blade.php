<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/css-loader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('style')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.common.header')
    @include('admin.common.side-bar')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.common.footer')
</div>
<script type="text/javascript">
    let site_url = "{{URL::to('/')}}";
</script>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.all.js')}}"></script>
<script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/dist/js/popper.min.js')}}"></script>
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<script src="{{asset('assets/dist/js/custom.js')}}"></script>

@if(Session::has('message'))
    <script src="{{asset('assets/dist/js/notification.js')}}"></script>
@endif

@yield('script')

</body>
</html>
