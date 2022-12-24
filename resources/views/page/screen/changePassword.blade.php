@extends('page.layouts.master')
@section('title' , 'Đổi mật khẩu')
@section('main_content')
<section class="section__user-change--pass">
    <h2 class="title">Đổi mật khẩu</h2>
        <form action="{{route('changePasswordPost')}}" class="form-box" method="POST">
        @csrf
        <div class="input-wrapper">
            <label for="">Mật khẩu hiện tại:</label>
            <div class="box">
                <input class="input password__current" placeholder="Nhập mật khẩu hiện tại"  type="password" name="current_password" />
                <span class="input-border"></span>
            </div>
           <p class="error error__curpassword"></p>
        </div>
        <div class="input-wrapper">
            <label for="">Mật khẩu mới: </label>
            <div class="box">
                <input class="input password__new"  placeholder="Nhập mật khẩu"  type="password" name="password"/>
                <span class="input-border"></span>
            </div>
            <p class="error error__password-new"></p>
        </div>
        <div class="input-wrapper">
            <label for="">Nhập lại Vật khẩu mới: </label>
            <div class="box">
                <input class="input password__confirm" placeholder="Nhập mật khẩu"  type="password" name="password_confirmation"/>
                <span class="input-border"></span>
            </div>
            <p class="error error__password-confirm"></p>
        </div>
        <div class="form-footer">
            <button class="form-btn">Đổi mật khẩu</button>
            <p>Để bảo mật tài khoản, vui lòng không chia sẻ cho người khác.</p>
        </div>
    </form>
</section>
@section('script')
<script src="{{asset('js/change-password.js')}}"></script>
@endsection
@endsection