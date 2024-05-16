@extends('layouts.header_attendance')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css')}}">


@section('stamp_date')
<div class="main">
        <div class="main__inner">
            @if(Auth::check())
            <h2 class="message">{{ Auth::user()->name }} さんお疲れ様です！</h2>
            @endif
            <div class="Atte__inner">
                <div class="work">
                    <form class="work__start" action="/attendance-start"  method="POST">
                        @csrf
                        <input type="hidden"  name="start_time">
                        <button class="work-start__button" type="submit">勤務開始</button>
                    </form>
                    <form class="work__end" action="/" method="POST">
                        @csrf
                        <input type="hidden"  name="end_time">
                        <button class="work-end__button" type="submit">勤務終了</button>
                    </form>
                </div>
                <div class="break">
                    <form class="break__start" action="" >
                        <input class="break-start__button" type="submit"  value="休憩開始">
                    </form>
                    <form class="break__end" action="" >
                        <input class="break-end__button" type="submit"  value="休憩終了">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection