<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>My Store</title>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('app-assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('app-assets/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div id="app">
        @include('layouts.top_nav')
        @include('layouts.side_nav')

        <div class="content-wrapper">

            <section class="content-header">
                <div class="col-12">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
</div>

<footer class="main-footer"></footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

<script src="{{asset('app-assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('app-assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('app-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('app-assets/dist/js/adminlte.js')}}"></script>
<script src="{{asset('app-assets/dist/js/demo.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}

@yield('scripts')

</body>
<script src="{{asset('app-assets/dist/js/pages/dashboard.js')}}"></script>
</html>
