<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png') }}">
    <title>seongshop.com | Log in</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="wrapper">
        <div class="container hide-sp">
            <div class="container__image--box">
                <img src="{{asset('image/banner-login3.jpg')}}" alt="" class="fade active container__image 1" />
                <img src="{{asset('image/banner-login2.jpg')}}" alt="" class="fade container__image 2" />
            </div>
            <div class="container__dots--box">
                <div class="container__dots-in">
                    <div class="container__dots--item active"></div>
                    <div class="container__dots--item"></div>
                </div>
            </div>
            <h2 class="container__title">seongshop<span>.com</span></h2>
        </div>
        <div class="form__auth form__register">
            <div class="form__register-in">
                <div class="form__header">
                    <a href=""><img class="form__header--logo"
                            src="{{asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png')}}"
                            alt="" /></a>
                    <h2 class="form__header--title">ĐĂNG KÝ TÀI KHOẢN</h2>
                </div>
                <form action="{{route('registerpost')}}" class="form-box" id="form__register" method="POST">
                    @csrf
                    <div class="input-wrapper">
                        <label for="">Tên tài khoản: </label>
                        <div class="box">
                            <input class="input" placeholder="Nhập tên tài khoản" type="text" id="realname"
                                name="realname" value="{{ old('realname') }}" />
                            <span class="input-border"></span>
                        </div>
                        @error('realname') <p class="error error-realname">{{$message}}</p>@enderror
                        <p class="error error-js-realname"></p>
                    </div>
                    <div class="input-wrapper">
                        <label for="">Email: </label>
                        <div class="box">
                            <input class="input" placeholder="Nhập tên tài khoản" type="email" id="email" name="email"
                                value="{{ old('email') }}" />
                            <span class="input-border"></span>
                        </div>
                        @error('email') <p class="error error-email">{{$message}}</p>@enderror
                        <p class="error error-js-email"></p>
                    </div>
                    <div class="input-wrapper">
                        <label for="">Mật khẩu: </label>
                        <div class="box">
                            <input class="input" placeholder="Nhập mật khẩu" type="password" id="password"
                                name="password" value="{{ old('password') }}" />
                            <span class="input-border"></span>
                        </div>
                        @error('password') <p class="error error-password">{{$message}}</p>@enderror
                        <p class="error error-js-password"></p>
                    </div>
                    <div class="input-wrapper">
                        <label for="">Nhập lại mật khẩu: </label>
                        <div class="box">
                            <input class="input" placeholder="Nhập mật khẩu" type="password" id="password_confirmation"
                                name="password_confirmation" value="{{ old('password_confirmation') }}" />
                            <span class="input-border"></span>
                        </div>
                        @error('password_confirmation') <p class="error error-password_confirmation">{{$message}}</p>
                        @enderror
                        <p class="error error-js-password_confirmation"></p>
                    </div>
                    <div class="input-wrapper">
                    <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                    
                    @error('g-recaptcha-response')  <p class="error error-password">{{$message}}</p>@enderror
                    </div>
                    <div class="form-footer">
                        <button class="form-btn" type="submit">Đăng ký ngay</button>
                        <p><a href="{{route('login')}}">Quay lại đăng nhập.</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/slider-auth.js')}}"></script>
    {{-- <script src="{{asset('js/vadidate-register.js')}}"></script> --}}
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