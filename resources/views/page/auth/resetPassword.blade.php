<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>

<body>
    <div class="wrapper">
        <div class="container hide-sp">
            <div class="container__image--box">
                <img src="https://preview.redd.it/ehvgoqf2grd61.png?width=1920&format=png&auto=webp&s=d6cb17f773a8c058957349fee592e906437176ba"
                    alt="" class="fade active container__image 1" />
                <img src="https://pbs.twimg.com/media/FN43-UUXoAEROHB.jpg:large" alt=""
                    class="fade container__image 2" />
                <img src="https://c4.wallpaperflare.com/wallpaper/968/762/547/minecraft-shader-wallpaper-preview.jpg"
                    alt="" class="container__image fade 3" />
            </div>
            <div class="container__dots--box">
                <div class="container__dots-in">
                    <div class="container__dots--item active"></div>
                    <div class="container__dots--item"></div>
                    <div class="container__dots--item"></div>
                </div>
            </div>
            <h2 class="container__title">seongshop<span>.com</span></h2>
        </div>
        <div class="form__auth ">
            <div class="">
                <div class="form__header">
                    <a href=""><img class="form__header--logo"
                            src="{{asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png')}}"
                            alt="" /></a>
                    <h2 class="form__header--title">QUÊN MẬT KHẨU</h2>
                </div>
                <form action="{{route('resetPass')}}" class="form-box" id="form__login" method="POST">
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
               
                    <div class="form-footer">
                        <p class="form-btn" style="text-align: center;" id="login">Giửi yêu cầu</p>
                        <p><a href="{{route('login')}}">Quay lại đăng nhập.</a></p>
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
    <script>
    $(document).ready(function () {
        var click = 0;
        $("#login").click(function () {
            click ++;
            if(click==1){
                $("#form__login").submit();
              }
    
        });
    });
    </script>

</body>

</html>