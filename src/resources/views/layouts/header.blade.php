<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header_common.css') }}" />
</head>

<body>
    <div class="header">
        <div class="header__inner">
            <a class="header__logo" href="/" ><h1>Atte</h1></a>
        </div>
    </div>
        @yield('login_register')
    <div class="footer">
        <div class="footer__inner" >
            <p2 class="footer__logo">Atte,inc.</p2>
        </div>
    </div>
</body>

</html>