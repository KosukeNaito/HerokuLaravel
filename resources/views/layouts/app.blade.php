<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-US-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <h1>内藤昂佑の暇つぶしサイト</h1>
    <nav>
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