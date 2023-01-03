<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body>
    <div class="container">
        <!-- Phần header -->
        @include('page.layouts.header')
        <div class="content">
            <div class="containerX content__in">
                <!-- Phần sidebar -->
                @include('page.layouts.sidebar')
                <div class="content__main">
                    @yield('main_content')
                </div>
            </div>
        </div>

        <!-- Phần header -->
        @include('page.layouts.footer')
    </div>
    <div id="backTop" onClick="backTop()" class="back-top active">
        <i class="fa-sharp fa-solid fa-caret-up"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <script src="{{asset('js/active-route.js')}}?version=0.0.2"></script>
    <script src="{{asset('js/config.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('error'))
        <script>
            swal("", " {!! session('error') !!}", "error", {
                button: "OK",
            })
        </script>
    @elseif(session('success'))
        <script>
            swal("", " {!! session('success') !!}", "success", {
                button: "OK",
            })
        </script>
    @endif
    <script>
        // autologout.js

        $(document).ready(function() {
            const timeout = 900000; // 900000 ms = 15 minutes
            var idleTimer = null;
            $('*').bind(
                "mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick ", function () {
                clearTimeout(idleTimer);

                idleTimer = setTimeout(function() {
                    window.location = "{{ route('logout') }}";
                }, timeout);
            });
            $("body").trigger("mousemove");
        });
    </script>
 @yield('script')
</body>

</html>
