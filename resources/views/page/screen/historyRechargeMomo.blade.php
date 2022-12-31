@extends('page.layouts.master')
@section('title' , 'Lịch sử nạp qua atm/momo')
@section('main_content')
<div class="section__history-retract">
    <h2 class="title">Lịch sử nạp qua atm/momo</h2>
    <div class="table__box">
        <table class="table">
            <thead>
                <th class="stt">STT</th>
                <th>Mệnh giá</th>
                <th>Phương thức</th>
                <th>Thời gian</th>
            </thead>
            <tbody>
                @foreach($datas as $key)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="points"><?= number_format($key->amount , 0 ,'.' , '.') ?>đ</td>
                    <td>{{$key->type == "momo_wallet" ? "Nạp thẻ bằng ATM momo" : "Nạp thẻ bằng mã QR momo"}}</td>
                    <td><?=date_format(date_create($key->date),"H:i:s d/m/Y")?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection