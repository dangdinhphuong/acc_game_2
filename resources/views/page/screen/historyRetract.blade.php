@extends('page.layouts.master')
@section('title' , 'Lịch sử rút vật phẩm')
@section('main_content')
<div class="section__history-retract">
    <h2 class="title">Lịch sử rút vật phẩm</h2>
    <div class="table__box">
        <table class="table">
            <thead>
                <th class="stt">STT</th>
                <th>Tên người dùng</th>
                <th>Số tiền rút</th>
                <th>Thời gian</th>
            </thead>
            <tbody>
                <?php $index = 1; ?>
                @foreach($history as $key)
                <tr>
                    <td>{{$index++}}</td>
                    <td>{{$key->username}}</td>
                    <td class="points">{{$key->points}}đ</td>
                    <td><?=date_format(date_create($key->date),"H:i:s d/m/Y")?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection