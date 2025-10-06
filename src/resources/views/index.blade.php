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
@endsection

@section('scripts')
{{-- JavaScriptファイルの読み込み --}}
<!-- <script src="{{ asset('/js/index.js') }}"></script> -->
@endsection