@extends('layouts.header_attendance')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css')}}">

@section('stamp_date')
    <!-- main -->
    <div class="main">
        <div class="main__inner">
            <div class="date__page">
                <a class="date__btn" href=""><</a>
                <h1 class="select__day">YYYY-MM-DD</h1>
                <a class="date__btn" href="">></a>
            </div>
                <table class="date__table">
                    <tr>
                        <th>名前</th>
                        <th>勤務開始</th>
                        <th>勤務終了</th>
                        <th>休憩時間</th>
                        <th>勤務時間</th>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                        <td>HH:MM:SS</td>
                    </tr>
                </table>
    {{-- ページネーションLaravel基礎講座 2-4:ページネーションについて学ぼう --}}
            <div class="page_nation">
            <b>ページネーション部分</b>
            </div>
        </div>
@endsection