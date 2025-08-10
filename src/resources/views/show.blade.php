@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')
<!-- <div class="index">
    <div class="index__heading-flex">
        <h2 class="index__heading-ttl">の商品一覧</h2>
        <div class="index__heading-btn btn-orange">
            <input class="index__heading-btn-submit" type="submit" value="&#43; 商品を追加">
        </div>
    </div>
    <div class="index__inner">
        <nav class="index__inner__sidebar">
            <label class="index__inner-input text-search" for="name">
                <input class="index__inner__sidebar-search-submit" type="text" name="name" id="name" value="商品名で検索">
            </label>
            <label class="index__inner-btn btn-yellow" for="name">
                <input class="index__inner__sidebar-btn-submit" type="submit" name="name" id="name" value="検索">
            </label>
            <h3 class="index__inner__sidebar-h3-ttl">価格順で表示</h3>
            <label class="index__inner__sidebar-select" for="price">
                <select class="index__inner__sidebar-select-price" name="price" id="price" value="">
                    <option disabled selected>価格で並べ替え</option>
                    <option value="1">800</option>
                    <option value="2">900</option>
                    <option value="3">1200</option>
                </select>
            </label>
        </nav>
        <div class="index__inner__grid">
            <div class="index__inner__grid-fruit-card">
                <img src="/storage/kiwi.png" alt="キウイ">
                <div class="index__inner__grid-fruit-card__product-info">
                    <h3>キウイ</h3>
                    <p>¥800</p>
                </div>
            </div>
            <div class="index__inner__grid-fruit-card">
                <img src="/storage/strawberry.png" alt="ストロベリー">
                <div class="index__inner__grid-fruit-card__product-info">
                    <h3>ストロベリー</h3>
                    <p>¥1200</p>
                </div>
            </div>
        </div>
        
    </div>
    
</div> -->


<footer class=hooter>
</footer>
@endsection

