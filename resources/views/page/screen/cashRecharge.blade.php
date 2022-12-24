@extends('page.layouts.master')
@section('title', 'Nạp thẻ tự động')
@section('main_content')
    <!-- <section class="section__user--info">

        <h2 class="title">Thẻ Nạp Gần Nhất</h2>
        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
            <div style="color: #fff;">
                <h2 class="tw-text-lg tw-font-semibold">Nạp Thẻ Cào</h2>
                <p class="tw-text-xs">
                    Tự động 24/7 - Nhập sai mệnh giá sẽ mất thẻ.
                </p>
            </div>
            <form id="recharge" action="{{ route('recharge') }}"cstyle="color: #fff;" method="POST">
                @csrf
                <div class="tw-mb-2">
                    <div id="msgCard" style="padding-bottom: 13px;"></div>
                    <label> Nhà mạng <b>(Ưu tiên Viettel, Vinaphone)</b></label>
                    <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-text-sm">

                        <select name="type">
                            <option class="tw-font-medium tw-text-red-600" value="Viettel">
                                Viettel
                            </option>
                            <option class="tw-font-medium tw-text-red-600" value="Vinaphone">
                                Vinaphone
                            </option>
                            <option class="tw-font-medium tw-text-red-600" value="Mobifone">
                                Mobifone
                            </option>

                        </select>
                        @error('type')
                            <p class="error error-realname">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="tw-mb-2">
                    <label> Mệnh giá </label>
                    <select name="amount">
                        <option disabled="disabled" value="">Chọn mệnh giá</option>
                        <option class="tw-font-medium tw-text-red-600" value="10000">
                            Thẻ 10,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="20000">
                            Thẻ 20,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="30000">
                            Thẻ 30,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="50000">
                            Thẻ 50,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="100000">
                            Thẻ 100,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="200000">
                            Thẻ 200,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="300000">
                            Thẻ 300,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="500000">
                            Thẻ 500,000đ
                        </option>
                        <option class="tw-font-medium tw-text-red-600" value="1000000">
                            Thẻ 1,000,000đ
                        </option>
                    </select>
                    @error('amount')
                        <p class="error error-realname">{{ $message }}</p>
                    @enderror
                </div>

                <div class="tw-mb-4"><label> Mã thẻ </label>
                    <input name="code" placeholder="Mã thẻ" value="{{ old('code') }}" />
                </div>
                @error('code')
                    <p class="error error-realname">{{ $message }}</p>
                @enderror

                <div class="tw-mb-4"><label> Serial thẻ </label>
                    <input name="serial" placeholder="Serial thẻ" value="{{ old('serial') }}" />
                </div>
                @error('serial')
                    <p class="error error-realname">{{ $message }}</p>
                @enderror
                <button  >
                    Nạp Thẻ
                </button>
            </form>
        </div>
        <div style="color: #fff;">
            <div class="relative">
                <p>
                    <span style="color: rgb(220, 38, 38);"><strong>Lưu ý: </strong></span>
                </p>
                <p>
                    <span style="color: rgb(220, 38, 38);"><strong>- Vui lòng nạp đúng mệnh giá, sai mệnh giá sẽ không được
                            cộng tiền vào tài khoản.</strong></span>
                </p>
                <p>
                    <span style="color: rgb(220, 38, 38);"><strong>- Thẻ cào bị treo ĐANG XỬ LÝ quá 10p kể từ lúc nạp thẻ
                            xin vui lòng liên hện page để được hỗ trợ.</strong></span>
                </p>
            </div>
        </div>
    </section> -->
    <section class="section__card--recharge">
              <h2 class="title">Nạp thẻ siêu tốc</h2>
              <div class="section__card--box">
                <form class="form__card" action="{{route('recharge')}}" method="POST">
                  @csrf
                  <input type="text" id="route" value="{{route('recharge')}}"  hidden>
                  <div class="form__control">
                    <label for="" class="">Nhà mạng:</label>
                    <div class="home__word home__word-one">
                      <p class="home__word--result">Viettel</p>
                      <i class="fa-solid fa-sort-down"></i>
                      <input type="text" id="home__word" value="Viettel" name="type"  hidden />
                    </div>
                    <div class="home__word--list home__word--list-one">
                      <div class="home__word--item select__item-one">Viettel</div>
                      <div class="home__word--item select__item-one">Vinaphone</div>
                      <div class="home__word--item select__item-one">Mobifone</div>
                    </div>
                    @error('type')  <p style="color: red;font-size: 15px;margin-top: 2%;">{{$message}}</p>@enderror
                  </div>
                  <div class="form__control">
                    <label for="" class="">Mệnh giá:</label>
                    <div class="home__word home__word-two ">
                      <p  class="home__word--result-two">10.000đ</p>
                      <i class="fa-solid fa-sort-down"></i>
                      <input type="text" id="money" value="10000" name="amount"  hidden />
                    </div>
                    <div class="home__word--list home__word--list-two">
                      <div class="home__word--item select__item-two" id="10000">10.000đ</div>
                      <div class="home__word--item select__item-two" id="20000">20.000đ</div>
                      <div class="home__word--item select__item-two" id="30000">30.000đ</div>
                      <div class="home__word--item  select__item-two" id="50000">50.000đ</div>
                      <div class="home__word--item select__item-two" id="100000">100.000đ</div>
                      <div class="home__word--item select__item-two" id="200000">200.000đ</div>
                      <div class="home__word--item select__item-two" id="300000">300.000đ</div>
                      <div class="home__word--item select__item-two" id="500000">500.000đ</div>
                      <div class="home__word--item select__item-two" id="1000000">1.000.000đ</div>
                    </div>
                    @error('amount')  <p style="color: red;font-size: 15px;margin-top: 2%;">{{$message}}</p>@enderror
                  </div>
                  <div class="form__control">
                    <div class="inputbox">
                      <input
                        id="code"
                        style="z-index: 1"
                        name="code"
                        type="text"
                        placeholder="Mã thẻ cào"
                      />
                      <span>Mã thẻ</span>
                      <i></i>
                    </div>
                    <p class="error error-code"></p>
                  </div>
                  <div class="form__control">
                    <div class="inputbox">
                      <input
                        id="serial"
                        style="z-index: 1"
                        type="text"
                        name="serial"
                        placeholder="Mã serial"
                      />
                      <span>Serial thẻ</span>
                      <i></i>
                    </div>
                    <p class="error error-serial"></p>
                  </div>
                  <button type="submit" class="btn__submit-game">Rút ngay</button>
                </form>
                <div class="hide-sp">
                  <img src="https://motgame.vn/wp-content/uploads/2022/06/tai-minecraft-1-16-5-mien-phi-5.jpg" alt="">
                </div>
              </div>
              <ul class="note">
                <li>Lưu ý:</li>
                <li>
                  - Vui lòng nạp đúng mệnh giá, sai mệnh giá sẽ không được
                </li>
                <li>
                  - Vui lòng nạp đúng mệnh giá, sai mệnh giá sẽ không được cộng
                  tiền vào tài khoản. - Thẻ cào bị treo ĐANG XỬ LÝ quá 10p kể từ
                  lúc nạp thẻ xin vui lòng liên hện page để được hỗ trợ.
                </li>
              </ul>
            </section>

@endsection

@section('script')
<script src="{{asset('js/selector.js')}}"></script>
{{-- <script>
    function napthe(){
       window.location.href = {{route('cardRchargeHistory')}};
    }
   </script> --}}
@endsection
