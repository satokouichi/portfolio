<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/common/') }}/favicon.ico">
    @vite(['resources/sass/web/app.scss','resources/js/web/app.ts'])
</head>
<body id="app">

    {{-- メイン --}}
    {{ $slot }}

    @stack('scripts')

</body>
</html>
