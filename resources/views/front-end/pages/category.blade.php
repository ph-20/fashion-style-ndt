<?php
    use Shop\Category;
?>
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
                    <img src="storage/products/slide_1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Hello</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="storage/products/slide_2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Welcome to Website</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="storage/products/slide_3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Fashion Style NDT</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="storage/products/slide_4.jpg" alt="...">
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
            <div class="pull-left">
                <h3>Danh mục
                    <small>{{$category->name}}</small>
                </h3>
            </div>
            <div class="pull-right">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">{{$category->name}}</li>
                </ol>
            </div>
            <div class="clearfix"></div>

            <article class="sidebar-left col-sm-4 col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh mục</div>
                    <div class="panel-body">
                        <?php $i = 1 ?>
                        @foreach($sidebars as $sidebar)
                            <?php
                                $childSidebars = Category::where('parent_id', $sidebar->id)->get();
                            ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{$i}}">
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapse{{$i}}" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        {{$sidebar->name}}
                                    </a>
                                </div>
                            </div>
                            <div id="collapse{{$i}}" class="panel-collapse collapse {{($i == 1) ? 'in' : ''}}" role="tabpanel"
                                 aria-labelledby="heading{{$i++}}">
                                <div class="panel-body">
                                    <ul class="sidebar-menu">
                                        @foreach($childSidebars as $childSidebar)
                                        <li><a href="{{route('category', $childSidebar->slug)}}">{{$childSidebar->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </article>
            <!--End Sidebar-->

            <article class="content-body new-product col-sm-8 col-md-9">
                <h3 class="content-title">Sản phẩm mới</h3>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <div class="single-item">
                            @if($product->discount > 0)
                            <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                            </div>
                            @endif
                            <div class="single-item-header">
                                <a href="{{route('product', $product->slug)}}" class="img-product">
                                    <img src="{{$product->image}}" alt="">
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
                                <a class="add-to-cart pull-left" href="{{route('add-to-cart', $product->id)}}"><i
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
@stop