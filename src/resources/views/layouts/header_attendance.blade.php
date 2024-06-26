<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勤怠ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header_attendance.css') }}" />
</head>

<body>
    <div class="header">
        <div class="header__inner">
            <a href="/" class="header__logo"><h1>Atte</h1></a>
            <nav class="header__items">
                @if (Auth::check())
                <li><a href="/" class="home">ホーム</a></li>
                <li><a href="/date" class="date">日付一覧</a></li>
                <li><form class="form" action="/logout" method="POST">
                    @csrf
                    <button class="logout">ログアウト</button>
                    </form>
                </li>
                @endif
            </nav>
        </div>
    </div>
        @yield('stamp_date')
    <div class="footer">
        <div class="footer__inner" >
            <p2 class="footer__logo">Atte,inc.</p2>
        </div>
    </div>

</body>

</html>