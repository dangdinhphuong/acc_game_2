@extends('page.layouts.master')
@section('title' , 'Nạp xu vào game')
@section('main_content')
<section class="section__retract">
    <h2 class="title">Nạp xu vào game</h2>
    <div class="section__retract-in">
        <form action="{{ route('withdrawal') }}" method="POST" class="form__retract">
            @csrf
            <h3 class="form__title">Bước 1: <span>Chọn gói rút</span></h3>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input checked name="money" value="90" type="radio">
                        <div class="checkmark"></div>
                    </label>
                    <p>90đ</p>
                </div>
                <p class="value">Rút 90 KC (80% Nhận Thêm 150 KC)</p>
            </div>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input name="money" value="230" type="radio">
                        <div class="checkmark"></div>
                    </label>
                    <p>230đ</p>
                </div>
                <p class="value">
                    Rút 230 KC (50% Nhận Thêm 300 KC)</p>
            </div>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input  value="465" name="money" type="radio">
                        <div class="checkmark"></div>
                    </label>
                    <p>465đ</p>
                </div>
                <p class="value">Rút 465 KC (30% Nhận Thêm 2,000 KC)</p>
            </div>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input value="950" name="money" type="radio">
                        <div class="checkmark"></div>
                    </label>
                    <p>950đ</p>
                </div>
                <p class="value">Rút 950 KC (15% Nhận Thêm 5,000 KC)</p>
            </div>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input value="2375" name="money" type="radio">
                        <div class="checkmark"></div>
                    </label>
                    <p>2375đ</p>
                </div>
                <p class="value">
                    Rút 2375 KC (5% Nhận Thêm 10,000 KC)
                </p>
            </div>
            <h3 class="form__title">Bước 2: <span>Nhập username (Minecraft)</span></h3>
            <div class="import__id-game">
                <input name="username" placeholder="Nhập username">
                <p>Ví dụ: uynguyen123</p>
            </div>
            <button type="submit" class="btn__submit-game">Rút ngay</button>
        </form>
        <div class="section__retract-banner">
            <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/xdrkxrvekx/2022_02_10/mine-6301.png" alt="">
            <p class="section__retract-note"> Lưu ý: nếu bạn gặp vấn đề khi rút vật phẩm hãy liên hệ chăm sóc khách hàng
                để được hỗ trợ. Trường hợp rút nhầm về tài khoản khác shop không chịu trách nhiệm</p>
        </div>
    </div>
</section>
@endsection