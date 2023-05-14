<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="600;url={{route('login')}}" />
    <title>seongshop.com | Log in</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png') }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="wrapper">
        <div class="container hide-sp">
            <div class="container__image--box">
                <img src="{{asset('image/banner-login3.jpg')}}"
                    alt="" class="fade active container__image 1" />
                <img src="{{asset('image/banner-login2.jpg')}}" alt=""
                    class="fade container__image 2" />
            </div>
            <div class="container__dots--box">
                <div class="container__dots-in">
                    <div class="container__dots--item active"></div>
                    <div class="container__dots--item"></div>
                </div>
            </div>
            <h2 class="container__title">mineahihi<span>.com</span></h2>
        </div>
        <div class="form__auth ">
            <div class="">
                <div class="form__header">
                    <a href=""><img class="form__header--logo"
                            src="{{asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png')}}"
                            alt="" /></a>
                    <h2 class="form__header--title">ĐĂNG NHẬP TÀI KHOẢN</h2>
                </div>
                <form action="{{route('loginpost')}}" class="form-box" id="form__login" method="POST">
                    @csrf
                    <div class="input-wrapper">
                        <label for="">Tên tài khoản: </label>
                        <div class="box">
                            <input class="input" placeholder="Nhập tên tài khoản" type="text" id="realname" name="realname"/>
                            <span class="input-border"></span>
                        </div>
                        @error('realname')  <p class="error error-realname">{{$message}}</p>@enderror
                        <p class="error error-js-realname"></p>
                    </div>
                    <div class="input-wrapper">
                        <label for="">Mật khẩu: </label>
                        <div class="box">
                            <input class="input" placeholder="Nhập mật khẩu" type="password" id="password" name="password"/>
                            <span class="input-border"></span>
                        </div>
                        @error('password')  <p class="error error-password">{{$message}}</p>@enderror
                        <p class="error error-js-password"></p>
                    </div>
                    <div class="input-wrapper">
                    @if(env('RECAPTCHA') == "ON")
                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                        @error('g-recaptcha-response')  <p class="error error-password">{{$message}}</p>@enderror
                    @endif
                    </div>
                    
                    <div class="form-footer">
                         <p>Bạn quên mật khẩu? <a href="{{route('forgetPass')}}">Lấy lại mật khẩu ngay.</a></p> 
                        <p class="form-btn" style="text-align: center;" id="login">Đăng nhập ngay</p>
                        <p>Chưa có tài khoản? <a href="{{route('register_get')}}">Đăng ký thành viên.</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{asset('js/slider-auth.js')}}"></script>
    <script src="{{asset('js/vadidate-login.js')}}"></script>
    @if(session('error'))
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
</body>

</html>
