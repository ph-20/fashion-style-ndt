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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                    <div class="col-xs-6 col-sm-3">
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
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
            <!--End New Product-->

            <article class="content-body sale-product">
                <h3 class="content-title">Sản phẩm khuyến mãi</h3>
                <div class="row">
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
            <!--End Top Product-->
        </div>
    </section>
    <!--End content-->
@stop