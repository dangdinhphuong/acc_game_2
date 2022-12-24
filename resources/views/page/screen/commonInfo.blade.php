@extends('page.layouts.master')
@section('title' , 'Thông tin chung')
@section('main_content')
<section class="section__user--info">
    <h2 class="title">Thông tin tài khoản</h2>
    <div class="section__user--info-item">
        <p class="title-item">Tên tài khoản:</p>
        <p class="value">{{$currentUser->realname}}</p>
    </div>
    <div class="section__user--info-item">
        <p class="title-item">Số dư:</p>
        <p class="value" style="color:#ff013c"><?=number_format($currentUser->cash , 0 ,'.' , '.')?> đ</p>
    </div>
    <div class="section__user--info-item">
        <p class="title-item">Số dư Robux:</p>
        <p class="value">{{$points}}&nbsp;<i class="fa-solid fa-coins"></i>&nbsp;(xu)</p>
    </div>
    {{-- <div class="section__user--info-item">
        <p class="title-item">Nhóm tài khoản:</p>
        <p class="value">{{$currentUser->getTypeStringAttribute()}}</p>
    </div> --}}
    <div class="section__user--info-item">
        <p class="title-item">Ngày tham gia:</p>
        <p class="value">{{$currentUser->created_at}}</p>
    </div>
    <div class="section__user--info-item">
        <p class="title-item">Đăng xuất:</p>
        <p class="value"><a href="{{route('logout')}}">Đăng xuất</a></p>
    </div>
    <div class="btn__now-box">
        <button class="btn__now-card" onclick="napthe()">
            <span>NẠP NGAY</span>
        </button>
    </div>
</section>
@endsection
@section('script')
<script>
    function napthe(){ 
       window.location.href = "{{route('cardRchargeHistory')}}"; 
    }
   </script>
@endsection