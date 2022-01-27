<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <!-- Cross Site Request Forgery対策の認証（トークン) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bladeの波かっこ文は、PHPのhtmlentites関数でXSS（Cross Site Scripting攻撃を防ぐため -->
    <!-- configヘルパー関数は、"config('xxx.yyy', 'zzz')"で、configディレクトリ内のxxxファイルのyyyの記述を参照する。なければzzzを返す -->
    <title>{{ config('app.name', 'member_laravel') }}</title>


    <!-- scripts -->
    <!-- assetヘルパー関数で''内のjsファイルを読み込む -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts （googleのフォントサイトからフォントを参照している-->
    <!-- dns prefetchはページ読み込み開始と同時にフォントサイトへの接続を開始する -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- font awesomeのアイコンやフォントを参照している -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>