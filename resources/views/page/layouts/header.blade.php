<header class="header">
    <div class="containerX header__in">
        <div class="menu-responsive hide-pc">
            <label for="nav-mobile" class="icon__nav"> <i class="fa-solid fa-bars"></i></label>
            <input hidden type="checkbox" class="input-check" id="nav-mobile" />
            <label class="over_lay" for="nav-mobile"></label>
            <div class="menu__mobile">
                <div class="btn__close">
                    <label for="nav-mobile" class="btn__close-nav"><i class="fa-solid fa-xmark"></i></label>
                </div>
                <ul class="menu__mobile-list">
                    <li class="menu__mobile-item"><a href="{{ route('profile') }}">Thông tin</a></li>
                    <li class="menu__mobile-item"><a href="{{ route('changePassword') }}">Đổi mật khẩu</a></li>
                    <li class="menu__mobile-item"><a href="{{ route('pageWithdrawal') }}">Rút sản phẩm</a></li>
                    <li class="menu__mobile-item"><a href="{{route('cardRchargeHistory')}}">Nạp thẻ tự động</a></li>
                    <li class="menu__mobile-item"><a href="{{route('momo')}}">Nạp ATM/MOMO</a></li>
                    <li class="menu__mobile-item"><a href="{{route('historyRecharge')}}">Lịch sử nạp thẻ</a></li>
                    <li class="menu__mobile-item"><a href="{{route('historyRetract')}}">Lịch sử rút xu</a></li>
                </ul>
            </div>
        </div>
        <div class="header__left">
            <a href="" class="header__logo">
                <img src="{{asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png')}}"
                    alt="" class="header__logo__image" />
            </a>
            <ul class="header__option hide-flex">
                <li class="header__option--item">
                    <a href="{{route('cardRchargeHistory')}}" class="fancy">
                        <span class="top-key"><i class="fa-solid fa-sack-dollar"></i></span>
                        <span class="text">NẠP THẺ</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </a>
                </li>
                <li class="header__option--item">
                    <a href="" class="fancy">
                        <span class="top-key"><i class="fa-solid fa-money-check-dollar"></i></span>
                        <span class="text">Nạp thẻ ATM/momo</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </a>
                </li>
                <li class="header__option--item">
                <a href="{{route('pageWithdrawal')}}" class="learn-more">
                  <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Đổi xu vào game</span>
                </a>
              </li>
            </ul>
        </div>
        <div class="header__info">
            <a href="" class="header__social"><i class="fa-brands fa-facebook-f"></i></a>
            <!-- <button class="header__login">Đăng nhập</button> -->
            <div class="header__info--after-login">
                <img src="{{asset('image/unknown-avatar (1).jpg')}}" alt="" />
                <span><?= number_format($currentUser->cash , 0 , '.' , '.') ?>đ</span>
            </div>
        </div>
    </div>
</header>