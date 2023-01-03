<div class="content__nav hide-sp">
    <div class="header__nav">
        <img class="header__nav--avatar" src="{{asset('image/unknown-avatar (1).jpg')}}" alt="" />
        <div class="header__nav--info">
            <span class="id">{{$currentUser->realname}}</span>
            <span>Số dư : <span class="moneny"><?= number_format($currentUser->cash , 0 , '.' , '.') ?>đ</span></span>
        </div>
    </div>
    <div class="menu__nav">
        <div class="menu__nav-item account">
            <div class="menu__nav-item-icon ">
                <i class="fa-solid fa-user"></i>
            </div>
            <ul class="menu__nav-list">
                <li class="menu_nav--item ">
                    <a href="{{ route('profile') }}">Tài khoản</a>
                </li>
                <li class="menu_nav--item account__info"><a href="{{ route('profile') }}">Thông tin chung</a></li>
                <li class="menu_nav--item account__change_password"><a href="{{route('changePassword')}}">Đổi mật khẩu</a></li>
            </ul>
        </div>
        <div class="menu__nav-item game">
            <div class="menu__nav-item-icon">
                <i class="fa-solid fa-gamepad"></i>
            </div>
            <ul class="menu__nav-list">
                <li class="menu_nav--item"><a href="{{ route('withdrawal') }}">Trò chơi</a></li>
                <li class="menu_nav--item game-withdrawal"><a href="{{ route('pageWithdrawal') }}">Nạp xu vào game</a></li>
            </ul>
        </div>
        <div class="menu__nav-item rcharge">
            <div class="menu__nav-item-icon">
                <i class="fa-solid fa-money-bill"></i>
            </div>
            <ul class="menu__nav-list">
                <li class="menu_nav--item"><a href="{{route('cardRchargeHistory')}}">Giao dịch</a></li>
                <li class="menu_nav--item card-rcharge">
                    <a href="{{route('cardRchargeHistory')}}">Nạp thẻ cào tự động</a>
                </li>
                <li class="menu_nav--item card-momo">
                    <a href="{{route('momo')}}">Nạp qua ATM/MOMO</a>
                </li>
            </ul>
        </div>
        <div class="menu__nav-item history">
            <div class="menu__nav-item-icon" >
                <i class="fa-solid fa-rectangle-list"></i>
            </div>
            <ul class="menu__nav-list">
                <li class="menu_nav--item"><a href="">Lịch sử</a></li>
                <li class="menu_nav--item history-recharge">
                    <a href="{{route('historyRecharge')}}" >Lịch sử nạp thẻ</a>
                </li>
                <li class="menu_nav--item history-recharge-momo">
                    <a href="{{route('historyRechargeMomo')}}">Lịch sử nạp qua ATM/MOMO</a>
                </li>
                <li class="menu_nav--item history-retract">
                    <a href="{{route('historyRetract')}}">Lịch sử đổi xu</a>
                </li>
            </ul>
        </div>
    </div>
</div>