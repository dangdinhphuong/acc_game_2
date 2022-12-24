@extends('page.layouts.master')
@section('title' , 'Nạp thẻ ATM/MOMO')
@section('main_content')
{{--  <section class="section__retract">
    <h2 class="title">Nạp thẻ ATM/MOMO</h2>
    <div class="section__retract-in">
        <form action="{{ route('rechargeMomo') }}" method="POST" class="form__retract">
            @csrf
            <h3 class="form__title">Bước 1: <span>Chọn phương thức nạp</span></h3>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input checked name="request_type" value="payWithATM" type="radio">
                        <div class="checkmark"></div>
                    </label>
                </div>
                <p class="value">Nạp thẻ ATM momo</p>
            </div>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input name="request_type" value="captureWallet" type="radio">
                        <div class="checkmark"></div>
                    </label>
                </div>
                <p class="value">
                    Nạp thẻ bằng mã QR momo</p>
            </div>
            <h3 class="form__title">Bước 2: <span>Nhập số tiền muốn nạp</span></h3>
            <div class="import__id-game">
                <input name="money" value="{{ old('money') }}" placeholder="Nhập số tiền">
                @error('money') <p class="error" style="color:red;">{{$message}}</p>@enderror
            </div>
            <button type="submit" class="btn__submit-game">Rút ngay</button>
        </form>
        <div class="section__retract-banner">
            <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/xdrkxrvekx/2022_02_10/mine-6301.png" alt="">
            <p class="section__retract-note"> Lưu ý: nếu bạn gặp vấn đề khi rút vật phẩm hãy liên hệ chăm sóc khách hàng
                để được hỗ trợ. Trường hợp rút nhầm về tài khoản khác shop không chịu trách nhiệm</p>
        </div>
    </div>
</section>  --}}

<section class="section__card--momo">
    <h2 class="title">Nạp thẻ ATM/MOMO</h2>

    <div class="momo__form-box">
        <form action="{{ route('rechargeMomo') }}" method="POST" class="form__retract">
        @csrf
            <h3 class="form__title">
                Bước 1: <span>Chọn phương thức nạp</span>
            </h3>
            <input type="text" hidden id="route-submit" value="{{ route('rechargeMomo') }}">
            <div class="form__retract-checkbox">
                <label class="label-checkbox">
                    <input checked value="payWithATM" name="request_type" type="radio" />
                    <div class="checkmark"></div>
                </label>
                <p class="value">Nap thẻ ATM/MOMO</p>
            </div>
            <div class="form__retract-checkbox">
                <div class="form__retract-checkbox--price">
                    <label class="label-checkbox">
                        <input value="captureWallet" name="request_type" type="radio" />
                        <div class="checkmark"></div>
                    </label>
                </div>
                <p class="value">Nap thẻ bằng mã QR MOMO</p>
            </div>
            <h3 class="form__title">
                Bước 2: <span>Nhập số tiền muốn nạp</span>
            </h3>
            <div class="import__id-game">
                <div class="form__control">
                    <div class="inputbox">
                        <input id="input-serial" placeholder="Nhập số tiền muốn nạp"  name="money" style="z-index: 1" type="text" />
                        <span>Số tiền nạp; </span>
                        <i></i>
                    </div>
                    <p class="error error-serial"></p>
                    <p style="color: white;font-size:18px;margin-top:10px;">Số tiền:<span style="color: #ff013c;margin-top:2px" class="result-money">&nbsp;0đ</span></p>
                </div>
              
            </div>
            <div class="form__control">
                <button class="btn__submit-game">Rút ngay</button>
            </div>
        </form>
        <div class="momo__img hide-sp">
            <img src="https://touchcinema.com/storage/01-2019/unnamed.jpg" alt="">
        </div>
    </div>
</section>
@section('script');
<script src="{{asset('js/vadidate-momo.js')}}"></script>
@endsection
@endsection