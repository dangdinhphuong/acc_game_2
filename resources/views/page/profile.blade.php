<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/x-icon"  src="{{asset('image/z3935489327534_4c7085bdda46955300abe4955beefb66-removebg-preview.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>

<body>
    <div class="container">
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
                            <li class="menu__mobile-item"><a href="">Thông tin</a></li>
                            <li class="menu__mobile-item"><a href="">Đổi mật khẩu</a></li>
                            <li class="menu__mobile-item"><a href="">Rút sản phẩm</a></li>
                            <li class="menu__mobile-item"><a href="">Nạp thẻ tự động</a></li>
                            <li class="menu__mobile-item"><a href="">Nạp ATM/MOMO</a></li>
                            <li class="menu__mobile-item"><a href="">Lịch sử nạp thẻ</a></li>
                            <li class="menu__mobile-item"><a href="">Lịch sử rút vật phẩm</a></li>
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
                            <a href="" class="fancy">
                                <span class="top-key"><i class="fa-solid fa-sack-dollar"></i></span>
                                <span class="text">NẠP THẺ</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </li>
                        <li class="header__option--item">
                            <a href="" class="fancy">
                                <span class="top-key"><i class="fa-solid fa-money-check-dollar"></i></span>
                                <span class="text">Nạp atm/momo</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header__info">
                    <a href="" class="header__social"><i class="fa-brands fa-facebook-f"></i></a>
                    <!-- <button class="header__login">Đăng nhập</button> -->
                    <div class="header__info--after-login">
                        <img src="{{asset('image/unknown-avatar (1).jpg')}}" alt="" />
                        <span>5000đ</span>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="containerX content__in">
                <div class="content__nav hide-sp">
                    <div class="header__nav">
                        <img class="header__nav--avatar" src="{{asset('image/unknown-avatar (1).jpg')}}" alt="" />
                        <div class="header__nav--info">
                            <span class="id">ID: 84 <i class="fa-solid fa-copy"></i></span>
                            <span>Số dư : <span class="moneny">10.000đ</span></span>
                        </div>
                    </div>
                    <div class="menu__nav">
                        <div class="menu__nav-item active">
                            <div class="menu__nav-item-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <ul class="menu__nav-list">
                                <li class="menu_nav--item active">
                                    <a href="">Tài khoản</a>
                                </li>
                                <li class="menu_nav--item"><a href="">Thông tin chung</a></li>
                                <li class="menu_nav--item"><a href="">Đổi mật khẩu</a></li>
                            </ul>
                        </div>
                        <div class="menu__nav-item">
                            <div class="menu__nav-item-icon">
                                <i class="fa-solid fa-gamepad"></i>
                            </div>
                            <ul class="menu__nav-list">
                                <li class="menu_nav--item"><a href="">Trò chơi</a></li>
                                <li class="menu_nav--item"><a href="">Rút vật phẩm</a></li>
                            </ul>
                        </div>
                        <div class="menu__nav-item">
                            <div class="menu__nav-item-icon">
                                <i class="fa-solid fa-money-bill"></i>
                            </div>
                            <ul class="menu__nav-list">
                                <li class="menu_nav--item"><a href="">Giao dịch</a></li>
                                <li class="menu_nav--item">
                                    <a href="">Nạp thẻ cào tự động</a>
                                </li>
                                <li class="menu_nav--item">
                                    <a href="">Nạp qua ATM/MOMO</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu__nav-item">
                            <div class="menu__nav-item-icon">
                                <i class="fa-solid fa-rectangle-list"></i>
                            </div>
                            <ul class="menu__nav-list">
                                <li class="menu_nav--item"><a href="">Lịch sử</a></li>
                                <li class="menu_nav--item">
                                    <a href="">Lịch sử nạp thẻ</a>
                                </li>
                                <li class="menu_nav--item">
                                    <a href="">Lịch sử rút vật phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content__main">
                    <!-- Phần thông tin -->
                    <!-- <section class="section__user--info">
              <h2 class="title">Thông tin tài khoản</h2>
              <div class="section__user--info-item">
                <p class="title-item">Tên tài khoản:</p>
                <p class="value">Uy nguyễn</p>
              </div>
              <div class="section__user--info-item">
                <p class="title-item">Số dư:</p>
                <p class="value">5000đ</p>
              </div>
              <div class="section__user--info-item">
                <p class="title-item">Nhóm tài khoản:</p>
                <p class="value">Thành viên</p>
              </div>
              <div class="section__user--info-item">
                <p class="title-item">Ngày tham gia:</p>
                <p class="value">21:46:25 - 25/11/2022</p>
              </div>
              <div class="section__user--info-item">
                <p class="title-item">Đăng xuất:</p>
                <p class="value"><a href="">Đăng xuất</a></p>
              </div>
              <div class="btn__now-box">
                <button class="btn__now-card">
                  <span>NẠP NGAY</span>
                </button>
              </div>
            </section> -->
                    <!-- Phần quên mật khẩu -->
                    <!-- <section class="section__user-change--pass">
              <h2 class="title">Đổi mật khẩu</h2>
              <form action="" class="form-box">
                <div class="input-wrapper">
                  <label for="">Mật khẩu cũ:</label>
                  <div class="box">
                    <input
                      class="input"
                      placeholder="Nhập tên tài khoản"
                      required=""
                      type="text"
                    />
                    <span class="input-border"></span>
                  </div>
                  <p class="error">Bạn chưa nhập gì !</p>
                </div>
                <div class="input-wrapper">
                  <label for="">Mật khẩu mới: </label>
                  <div class="box">
                    <input
                      class="input"
                      placeholder="Nhập mật khẩu"
                      required=""
                      type="text"
                    />
                    <span class="input-border"></span>
                  </div>
                  <p class="error">Bạn chưa nhập gì !</p>
                </div>
                <div class="input-wrapper">
                  <label for="">Nhập lại mật khẩu mới: </label>
                  <div class="box">
                    <input
                      class="input"
                      placeholder="Nhập mật khẩu"
                      required=""
                      type="text"
                    />
                    <span class="input-border"></span>
                  </div>
                  <p class="error">Bạn chưa nhập gì !</p>
                </div>
                <div class="form-footer">
                  <button class="form-btn">Đăng ký ngay</button>
                  <p>Để bảo mật tài khoản, vui lòng không chia sẻ cho người khác.</p>
                </div>
              </form>
            </section> -->
                    <section class="section__retract">
                        <h2 class="title">Rút vật phẩm ( game )</h2>
                        <div class="section__retract-in">
                            <form class="form__retract">
                                <h3 class="form__title">Bước 1: <span>Chọn gói rút</span></h3>
                                <div class="form__retract-checkbox">
                                    <div class="form__retract-checkbox--price">
                                        <label class="label-checkbox">
                                            <input checked name="moneny" type="radio">
                                            <div class="checkmark"></div>
                                        </label>
                                        <p>90đ</p>
                                    </div>
                                    <p class="value">Rút 90 KC (80% Nhận Thêm 150 KC)</p>
                                </div>
                                <div class="form__retract-checkbox">
                                    <div class="form__retract-checkbox--price">
                                        <label class="label-checkbox">
                                            <input name="moneny" type="radio">
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
                                            <input name="moneny" type="radio">
                                            <div class="checkmark"></div>
                                        </label>
                                        <p>465đ</p>
                                    </div>
                                    <p class="value">Rút 465 KC (30% Nhận Thêm 2,000 KC)</p>
                                </div>
                                <div class="form__retract-checkbox">
                                    <div class="form__retract-checkbox--price">
                                        <label class="label-checkbox">
                                            <input name="moneny" type="radio">
                                            <div class="checkmark"></div>
                                        </label>
                                        <p>950đ</p>
                                    </div>
                                    <p class="value">Rút 950 KC (15% Nhận Thêm 5,000 KC)</p>
                                </div>
                                <div class="form__retract-checkbox">
                                    <div class="form__retract-checkbox--price">
                                        <label class="label-checkbox">
                                            <input name="moneny" type="radio">
                                            <div class="checkmark"></div>
                                        </label>
                                        <p>2375đ</p>
                                    </div>
                                    <p class="value">
                                        Rút 2375 KC (5% Nhận Thêm 10,000 KC)
                                    </p>
                                </div>
                                <h3 class="form__title">Bước 2: <span>Nhập ID game (Minecraft)</span></h3>
                                <div class="import__id-game">
                                    <input placeholder="Nhập ID game">
                                    <p>Ví dụ: 3098435880</p>
                                </div>
                                <button class="btn__submit-game"> Rút ngay</button>
                            </form>
                            <div class="section__retract-banner">
                                <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/xdrkxrvekx/2022_02_10/mine-6301.png"
                                    alt="">
                                <p class="section__retract-note"> Lưu ý: nếu bạn gặp vấn đề khi rút vật phẩm hãy liên hệ
                                    chăm sóc khách hàng để được hỗ trợ. Trường hợp rút nhầm về tài khoản khác shop không
                                    chịu trách nhiệm</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
       