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
                        <small>Áo Khoác</small>
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
                        <img src="bootstrap/images/products/1.jpg" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span><b>Giá:</b> 300.000đ</span>
                            </p>
                        </div>
                        <div class="single-item-desc">
                            <p><b>Mô tả:</b> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                quo ms id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                saepe.</p>
                        </div>
                        <div class="single-item-quantity">
                            <label>Số lượng:</label>
                            <select name="quantity" id="" class="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                        <div class="btn btn-default">Thêm vào giỏ</div>
                    </div>
                </div>

                <div class="row new-product ">
                    <h3 class="content-title">Sản phẩm tương tự</h3>
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                <div class="single-item-header">
                                    <a href="#" data-toggle="modal" data-target="#modalProduct"><img
                                                src="bootstrap/images/products/1.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">$34.55</span>
                                        <span class="flash-sale">$33.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="product.html">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                <div class="single-item-header">
                                    <a href="#" data-toggle="modal" data-target="#modalProduct"><img
                                                src="bootstrap/images/products/1.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">$34.55</span>
                                        <span class="flash-sale">$33.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="product.html">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                <div class="single-item-header">
                                    <a href="#" data-toggle="modal" data-target="#modalProduct"><img
                                                src="bootstrap/images/products/1.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">$34.55</span>
                                        <span class="flash-sale">$33.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="product.html">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                <div class="single-item-header">
                                    <a href="#" data-toggle="modal" data-target="#modalProduct"><img
                                                src="bootstrap/images/products/1.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">$34.55</span>
                                        <span class="flash-sale">$33.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="product.html">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!--End New Product-->

            <article class="sidebar-right col-sm-4 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Sản phẩm bán chạy</div>
                    <div class="panel-body">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Sản phẩm mới</div>
                    <div class="panel-body">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="bootstrap/images/products/1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <span class="title">Sample Woman Top</span>
                                <span class="price">300.000đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!--End Sidebar-->

        </div>
    </section>
    <!--End content-->
@stop