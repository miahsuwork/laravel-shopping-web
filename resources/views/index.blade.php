@extends('layouts.app')

@section('title', '首頁')

@section('header')
    @parent
@endsection

@section('content')
    <div class="section-banner-wrapper"></div>
    <div class="section-recommend-products-wrapper">
        <div class="recommend-products">
            <a href="{{ url('/products/1') }}" class="product-warpper">
                <div class="product">
                    <div class="product__img"></div>
                    <div class="product__desc">vfdv</div>
                    <div class="product__footer">
                        <div class="product__price">30</div>
                    </div>
                </div>
            </a>
            <a href="{{ url('/products/2') }}" class="product-warpper">
                <div class="product">
                    <div class="product__img"></div>
                    <div class="product__desc">vfdv</div>
                    <div class="product__footer">
                        <div class="product__price">30</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection