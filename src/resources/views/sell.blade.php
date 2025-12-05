@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="contents">
    <div class="register">
        <h1 class="register__ttl">商品の出品</h1>
        <form class="register__form" method="POST" action="{{ route('items.register') }}" enctype="multipart/form-data">
            @csrf

            <div class="form__contents">
                <p class="form__ttl">商品画像<span class="required-mark">必須</span></p>
                <div class="align-items">
                    <div class="item-image-container">
                        <img src="#" alt="商品画像" class="preview-img" />
                    </div>
                    <div class="select-button-container">
                        <label for="image" class="file-label">ファイルを選択</label>
                        <input type="file" class="file-input" id="image" name="image">
                        <span class="file-name-display"></span>
                    </div>
                </div>
            </div>
            <div class="form__error">
                @error('image')
                {{ $message }}
                @enderror
            </div>

            <h3 class="form__header">商品の詳細</h3>
            {{-- ここを編集する --}}
            <div class="form__contents">
                <p class="form__ttl">カテゴリー<span class="required-mark">必須</span><span class="required-mark--text">複数選択可</span></p>
                <div class="category-tags-container">
                    @php
                    // 以前の入力値（old('categories', [])）を保持するための処理
                    $selectedCategories = old('categories', []);
                    @endphp

                    @foreach($categories as $category)
                    @php $categoryId = $category->id;
                    @endphp

                    {{-- チェックボックス本体 (非表示) --}}
                    <input
                        type="checkbox"
                        name="categories[]"
                        value="{{ $categoryId }}"
                        id="category-{{ $categoryId }}"
                        class="hidden-checkbox"
                        {{ in_array((string)$categoryId, $selectedCategories) ? 'checked' : '' }}>

                    {{-- タグ状のラベル --}}
                    <label
                        for="category-{{ $categoryId }}"
                        class="tag-label">
                        {{ $category->category_name }}
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="form__error">
                @error('categories')
                {{ $message }}
                @enderror
            </div>

            <div class="form__contents">
                <p class="from__ttl">商品の状態<span class="required-mark">必須</span></p>
                <div class="form__input--text">
                    <select name="status_id" required>
                        <option value="" disabled {{ old('status_id') == '' ? 'selected' : '' }}>
                            選択してください
                        </option>
                        @foreach($statuses as $status_id => $status)
                        <option value="{{ $status_id }}" {{ old('status_id') == $status_id ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form__error">
                @error('status_id')
                {{ $message }}
                @enderror
            </div>



            <h3 class="form__header">商品名と説明</h3>
            <div class="form__contents">
                <p class="from__ttl">商品名<span class="required-mark">必須</span></p>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="商品名を入力">
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>

            <div class="form__contents">
                <p class="from__ttl">ブランド名<span class="required-mark">必須</span></p>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="商品名を入力">
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>


            <div class="form__contents">
                <p class="form__ttl">商品の説明<span class="required-mark">必須</span></p>
                <textarea name="description" id="description" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
            </div>
            <div class="form__error">
                @error('description')
                {{ $message }}
                @enderror
            </div>

            <div class="form__contents">
                <p class="form__ttl">販売価格<span class="required-mark">必須</span></p>
                <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="値段を入力">
            </div>
            <div class="form__error">
                @error('price')
                {{ $message }}
                @enderror
            </div>

            <div class="form__button">
                <button type="submit" class="button-register">出品する</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="{{ asset('/js/register.js') }}"></script> --}}
@endsection