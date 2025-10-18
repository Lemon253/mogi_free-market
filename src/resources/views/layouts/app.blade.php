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
        <div class="header__inner">
            {{-- ロゴへのリンク --}}
            <a href="{{ route('items.index') }}" class="header__logo">
                {{-- ロゴの画像 --}}
                <img src="{{ asset('storage/img/logo.svg') }}" alt="ロゴ">
            </a>
        </div>
        {{-- 検索欄 --}}
        <form class="search-form" action="{{ route('items.search') }}" method="get" data-search-term="{{ session('searches.search') }}">
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" name="search" id="search-input" placeholder="なにをお探しですか？" @if(session('searches.search')) value="{{ session('searches.search') }}" @endif />
                @if (Auth::check())
                <form class="form" action="/logout" method="post">
                    @csrf
                    <button class="form__button-submit" type="submit">ログアウト</button>
                </form>
                @else
                <form class="form" action="/login" class="form">
                    @csrf
                    <button class="form__button-login" type="submit">ログイン</button>
                </form>
                @endif
                <a href="" class="link_mypage">マイページ</a>
                <a href="" class="link_sell">出品</a>

    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>