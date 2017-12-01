@extends('front-end.layouts.master')

@section('content')
    <div class="slider">
        <div id="sliders" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#sliders" data-slide-to="0" class="active"></li>
                <li data-target="#sliders" data-slide-to="1"></li>
                <li data-target="#sliders" data-slide-to="2"></li>
                <li data-target="#sliders" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="bootstrap/images/slides/1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Hello</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="bootstrap/images/slides/1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Welcome to Website</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="bootstrap/images/slides/1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Fashion Style NDT</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="bootstrap/images/slides/1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Hello Today</h3>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#sliders" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#sliders" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--End Slider-->

    <section class="content">
        <div class="container">
            <article class="content-body new-product">
                <h3 class="content-title">Sản phẩm mới</h3>
                <div class="row">
                    @foreach($newProducts as $newProduct)
                        <div class="col-xs-6 col-sm-3">
                            <div class="single-item">
                                @if($newProduct->discount > 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                @endif
                                <div class="single-item-header">
                                    <a href="{{route('product', $newProduct->slug)}}" class="img-product">
                                        <img src="{{asset($newProduct->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$newProduct->name}}</p>
                                    <p class="single-item-price">
                                        @if($newProduct->discount > 0)
                                            <span class="flash-del">{{number_format($newProduct->price)}}đ</span>
                                            <span class="flash-sale">{{number_format($newProduct->discount)}}đ</span>
                                        @else
                                            <span class="flash-sale">{{number_format($newProduct->price)}}đ</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{route('add-to-cart', $newProduct->id)}}"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="{{route('product', $newProduct->slug)}}">Chi tiết <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$newProducts->links()}}
            </article>
            <!--End New Product-->

            <article class="content-body sale-product">
                <h3 class="content-title">Sản phẩm khuyến mãi</h3>
                <div class="row">
                    @foreach($promotionProducts as $promotionProduct)
                        <div class="col-xs-6 col-sm-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                <div class="single-item-header">
                                    <a href="{{route('product', $promotionProduct->slug)}}" class="img-product">
                                        <img src="{{asset($promotionProduct->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$newProduct->name}}</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">{{number_format($promotionProduct->price)}}đ</span>
                                        <span class="flash-sale">{{number_format($promotionProduct->discount)}}đ</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{route('add-to-cart', $promotionProduct->id)}}"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="{{route('product', $promotionProduct->slug)}}">Chi
                                        tiết <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$promotionProducts->links()}}
            </article>
            <!--End Top Product-->
        </div>
    </section>
    <!--End content-->
@stop