<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-US-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>
<body>
<header>
    <h1>
        <a href="/">内藤昂佑の暇つぶしサイト</a>
    </h1>
        <nav class="myNav">
        <ul>
            <li><a href="#">自己紹介</a></li>
            <li><a href="#">制作物</a></li>
            <li><a href="#">日記</a></li>
            <li><a href="#">お問合せ</a></li>
        </ul>
    </nav>
</header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>