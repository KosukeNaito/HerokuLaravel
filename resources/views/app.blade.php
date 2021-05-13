<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-US-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>内藤昂佑の暇つぶしサイト</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}"/>
</head>
<body>
    <div id="app">
        <header-component></header-component>

        <div class="centeringItem">
            <router-view></router-view>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>