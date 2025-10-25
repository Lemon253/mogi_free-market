@extends('layouts.app')

{{-- ページネーションの矢印のスタイル --}}
<style>
    svg.w-5.h-5 {
        /*paginateメソッドの矢印の大きさ調整のために追加*/
        width: 30px;
        height: 30px;
    }
</style>

@section('css')
{{-- CSSファイルの読み込み --}}
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
{{-- コンテンツ --}}
<div class="contents">
    <div class="contents__header">
        <div class="header__tags">
            <a href="" class="recommendation">おすすめ</a>
            {{-- <a href="{{ route('items.index') }}" class="recommendation @if($filter==='recommend' ) active-tag @endif">おすすめ</a> --}}

            <a href="" class="my-list">マイリスト</a>
            {{-- <a href="{{ route('item.index', ['tag' => 'mylist']) }}" class="my-list @if($filter === 'mylist') active-tag @endif">マイリスト</a> --}}

        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- JavaScriptファイルの読み込み --}}
<!-- <script src="{{ asset('/js/index.js') }}"></script> -->
@endsection