@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile-content">
    <p class="profile-content__ttl">プロフィール設定</p>
    <form action="{{ route('profile.update') }}" class="profile-form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="profile-image-container">
            <img class="profile-image" src="" alt="">
            <div class="select-button-container">
                <label for="image" class="file-label">画像を選択する</label>
                <input type="file" class="file-input" id="image" name="image">
                <span class="file-name-display"></span>
            </div>
        </div>

        <div class="form__contents">
            <p class="from__ttl">ユーザ名</p>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="商品名を入力">
        </div>

        <div class="form__contents">
            <p class="from__ttl">郵便番号</p>
            <input type="tel" id="post-code" name="post-code" maxlength="7" pattern="\d{7}" value="{{ old('post-code') }}" placeholder="郵便番号を入力">
        </div>

        <div class="form__contents">
            <p class="from__ttl">住所</p>
            <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="住所を入力">
        </div>

        <div class="form__contents">
            <p class="from__ttl">建物名</p>
            <input type="text" id="building" name="building" value="{{ old('name') }}" placeholder="建物名を入力">
        </div>


        <div class="form__button">
            <button type="submit" class="button-update">更新</button>
        </div>

    </form>

</div>
@endsection