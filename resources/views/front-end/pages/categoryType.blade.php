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
            <div class="pull-left">
                <h3>Loại sản phẩm
                    <small>Thời Trang Áo</small>
                </h3>
            </div>
            <div class="pull-right">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Thời Trang Áo</li>
                </ol>
            </div>
            <div class="clearfix"></div>

            <article class="sidebar-left col-sm-4 col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Giới tính</div>
                    <div class="panel-body">
                        <ul class="sidebar-menu">
                            <li><a href="">Nam</a></li>
                            <li><a href="">Nữ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh mục</div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        Thời Trang Áo
                                    </a>
                                </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul class="sidebar-menu">
                                        <li><a href="#">Áo Khoác</a></li>
                                        <li><a href="#">Áo Sơ Mi</a></li>
                                        <li><a href="#">Áo Thun</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                       aria-controls="collapseTwo">
                                        Thời Trang Quần
                                    </a>
                                </div>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="sidebar-menu">
                                        <li><a href="">Quần Jean</a></li>
                                        <li><a href="#">Quần Tây</a></li>
                                        <li><a href="#">Quần Sort</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                       aria-controls="collapseThree">
                                        Phụ Kiện
                                    </a>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul class="sidebar-menu">
                                        <li><a href="#">Thắt Lưng</a></li>
                                        <li><a href="#">Ví Da</a></li>
                                        <li><a href="#">Kính Mắt</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!--End Sidebar-->

            <article class="content-body new-product col-sm-8 col-md-9">
                <h3 class="content-title">Thời Trang Nam</h3>
                <div class="row">
                    @foreach($promotionProducts as $product)
                        <div class="col-xs-6 col-sm-6 col-md-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                <div class="single-item-header">
                                    <a href="#" data-toggle="modal" data-target="#modalProduct"><img
                                                src="bootstrap/images/products/{{$product->image}}" height="" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$product->name}}</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">{{$product->price}}</span>
                                        <span class="flash-sale">{{$product->discount}}</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href=""> <i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="product-detail" href="{{route("product",$product->id)}}">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{$promotionProducts->links()}}
            </article>
            <!--End New Product-->
        </div>
    </section>
    <!--End content-->
@stop