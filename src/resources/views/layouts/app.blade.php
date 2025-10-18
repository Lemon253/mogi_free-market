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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Story+Script&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            {{-- ロゴへのリンク --}}
            <a href="{{ route('items.index') }}" class="header__logo">
                {{-- ロゴの画像 --}}
                <img src="{{ asset('storage/img/logo.svg') }}" alt="ロゴ">
            </a>
        </div>
        @if (Auth::check())
        <form class="form" action="/logout" method="post">
            @csrf
            <button class="form__button-submit" type="submit">ログアウト</button>
        </form>
        @else
        <form action="/login" class="form">
            @csrf
            <button class="form__button-submit" type="submit">ログイン</button>
        </form>
        @endif
    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>