<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRM  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    @stack('css')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.partials.header')
        <div class="app-main">
            @include('backend.partials.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
                @include('backend.partials.footer')
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });

        </script>
        @include('vendor.lara-izitoast.toast')
</body>

</html>
