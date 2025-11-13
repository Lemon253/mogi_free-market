@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="mail-content">
    <div class="mail-content__text">
        <p class="text">登録していただいたメールアドレスに認証メールを送付しました。<br>メール認証を完了してください。</p>
    </div>

    <div class="mail-content__button">
        <a class="button-navigation" href="https://mailtrap.io/home">認証はこちらから</a>
    </div>

    <div class="mail-content__link">
        <a class="link-resend" href="/send-email">認証メールを再送する</a>
    </div>

</div>
@endsection