@extends('front-end.layouts.master')
@section('content')

    <section class="content">
        <div class="container">
            <article class="content-body new-product">
                <h3 class="content-title">Tìm kiếm sản phẩm</h3>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xs-6 col-sm-3">
                            <div class="single-item">
                                @if($product->discount > 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                @endif
                                <div class="single-item-header">
                                    <a href="{{route('product', $product->slug)}}" class="img-product">
                                        <img src="{{asset($product->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$product->name}}</p>
                                    <p class="single-item-price">
                                        @if($product->discount > 0)
                                            <span class="flash-del">{{number_format($product->price)}}đ</span>
                                            <span class="flash-sale">{{number_format($product->discount)}}đ</span>
                                        @else
                                            <span class="flash-sale">{{number_format($product->price)}}đ</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="{{route('product', $product->slug)}}">Chi tiết <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$products->links()}}
            </article>
            <!--End New Product-->
        </div>
    </section>
    <!--End content-->
@endsection
