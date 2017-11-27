@extends('front-end.layouts.master')
@section('content')

    <div class="container">
        <article class="content-body new-product">
            <h3 class="content-title">Tìm Kiếm </h3>
            <div class="row">
                @foreach($product as $new_product)
                    <div class="col-xs-6 col-sm-3">
                        <div class="single-item">
                            @if($new_product->discount > 0)
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                            @endif
                            <div class="single-item-header">
                                <a href="{{route("product",$new_product->id)}} ">
                                    <img src="{{asset($new_product->image)}}" height="200px" alt=""></a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">{{$new_product->name}}</p>
                                <p class="single-item-price">
                                    @if($new_product->discount > 0)
                                        <span class="flash-del">{{number_format($new_product->price)}}đ</span>
                                        <span class="flash-sale">{{number_format($new_product->discount)}}đ</span>
                                    @else
                                        <span class="flash-sale">{{number_format($new_product->price)}}đ</span>
                                    @endif
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                            class="fa fa-shopping-cart"></i></a>
                                <a class="product-detail" href="{{route("product",$new_product->slug)}}">Chi tiết <i
                                            class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </article>
        <!--End New Product-->


    </div>
@endsection
