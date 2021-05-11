<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-US-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}"/>
</head>
<body>
    <div id="app">
        <header-component></header-component>
        @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>