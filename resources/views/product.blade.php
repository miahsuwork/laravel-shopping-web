@extends('layouts.app')

@section('title', '產品內頁')

@section('header')
    @parent
@endsection

@section('content')
    <div class="section-product">
        <div class="product__img"><img src="http://gametsg.techbang.com/ro/icon2012/collection/7178eb35beb2e0ef40d62d017d3057be.png" alt="" srcset=""></div>
        <div class="flex-fill">
            <div class="product__desc">攻擊 165;洞數 2</div>
            <div class="product__price">價格 30</div>
            <div class="product__footer">
                <a href="/addProduct/1">加入購物車</a>
            </div>       
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection
<script>
    var msg = '{{Session::get('message')}}';
    var exist = '{{Session::has('message')}}';
    if(exist){
        alert(msg);
    }
</script>