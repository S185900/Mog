@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css')}}">
@endsection

// 商品更新画面(変更)
@section('content')
<div class="edit">
    <div class="edit__heading-flex">
        <h2 class="index__heading-ttl"></h2>
        <div class="index__heading-btn btn-orange">
            <input class="index__heading-btn-submit" type="submit" value="&#43; 商品を追加">
        </div>
    </div>
    <div class="index__inner">
        <nav class="index__inner__sidebar">
            <label class="index__inner-input text-search" for="name">
                <input class="index__inner__sidebar-search-submit" type="text" name="name" id="name" value="商品名で検索">
            </label>


@endsection