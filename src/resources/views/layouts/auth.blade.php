<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    {{-- フォントの読み込み --}}
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__ttl">
            {{-- ロゴへのリンク --}}
            <a href="{{ route('items.index') }}" class="header__logo">
                {{-- ロゴの画像 --}}
                <img src="{{ asset('storage/dummy/logo.svg') }}" alt="ロゴ">
            </a>

    </header>
    
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>