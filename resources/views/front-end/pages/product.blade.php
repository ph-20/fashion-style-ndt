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
            <div class="row">
                <div class="pull-left">
                    <h3>Sản phẩm
                        <small>{{$product->category->name}}</small>
                    </h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Thời Trang Áo</a></li>
                        <li class="active">Áo Khoác</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <article class="content-body col-sm-8 col-md-9">
                <div class="row product">
                    <div class="col-sm-4">
                        <img src="{{$product->image}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">{{$product->name}}</p>
                            <p class="single-item-price">
                                @if($product->discount > 0)
                                    <span><b>Giá:</b> {{number_format($product->discount)}}đ</span>
                                @else
                                    <span><b>Giá:</b> 3{{number_format($product->price)}}đ</span>
                                @endif
                            </p>
                        </div>
                        <div class="single-item-desc">
                            <p><b>Mô tả:</b> {{$product->description}}</p>
                        </div>
                        <a href="{{route('add-to-cart', $product->id)}}" class="btn btn-default">Thêm vào giỏ</a>
                    </div>
                </div>

                <div class="row new-product ">
                    <h3 class="content-title">Sản phẩm tương tự</h3>
                    <div class="row">
                        @foreach($sameProducts as $sameProduct)
                            <div class="col-xs-6 col-md-3">
                                <div class="single-item">
                                    @if($sameProduct->discount > 0)
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">Sale</div>
                                        </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('product', $sameProduct->slug)}}" class="img-product-small">
                                            <img src="{{$sameProduct->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sameProduct->name}}</p>
                                        <p class="single-item-price">
                                            @if($sameProduct->discount > 0)
                                                <span class="flash-del">{{number_format($sameProduct->price)}}đ</span>
                                                <span class="flash-sale">{{number_format($sameProduct->discount)}}
                                                    đ</span>
                                            @else
                                                <span class="flash-sale">{{number_format($sameProduct->price)}}đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('add-to-cart', $sameProduct->id)}}"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        <a class="product-detail" href="{{route('product', $sameProduct->slug)}}">Chi
                                            tiết <i
                                                    class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>
            <!--End New Product-->

            <article class="sidebar-right col-sm-4 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Sản phẩm bán chạy</div>
                    <div class="panel-body">
                        @foreach($hotProducts as $hotProduct)
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{$hotProduct->image}}" alt="">
                                </a>
                                <div class="media-body">
                                    <span class="title">{{$hotProduct->name}}</span>
                                    @if($hotProduct->discount > 0)
                                        <span class="price">{{number_format($hotProduct->discount)}}đ</span>
                                    @else
                                        <span class="price">{{number_format($hotProduct->price)}}đ</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Sản phẩm mới</div>
                    <div class="panel-body">
                        @foreach($newProducts as $newProduct)
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{$newProduct->image}}" alt="">
                                </a>
                                <div class="media-body">
                                    <span class="title">{{$newProduct->name}}</span>
                                    @if($newProduct->discount > 0)
                                        <span class="price">{{number_format($newProduct->discount)}}đ</span>
                                    @else
                                        <span class="price">{{number_format($newProduct->price)}}đ</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>
            <!--End Sidebar-->

        </div>
    </section>
    <!--End content-->
@stop