<?php
use Shop\Category;
?>

<header>
    <div class="header-top">
        <div class="container">
            <div class="pull-left">
                <ul class="nav nav-tabs top-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> 92 Quang Trung, Q. Hải Châu, TP. Đà
                            Nẵng</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-phone"></i> 01634 366 133</a></li>
                </ul>
            </div>
            <div class="pull-right">
                <ul class="nav nav-tabs top-menu">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <b>Xin chào: </b>{{Auth::user()->fullname}} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('getProfile')}}">Hồ sơ cá nhân</a></li>
                                @if(Auth::user()->role != 2)
                                    <li><a href="{{route('dashboard')}}" target="_blank">Quản trị nội dung</a></li>
                                @endif
                                <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{route('getRegister')}}">Đăng kí</a></li>
                        <li><a href="{{route('getLogin')}}">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--End Header Top-->
    <div class="header-body">
        <div class="container">
            <div class="pull-left logo">
                <h1>
                    <a href="{{route('index')}}" id="logo">Fashion Style NDT
                        <span>Sự lựa chọn tuyệt vời của bạn</span>
                    </a>
                </h1>
            </div>
            <div class="pull-right">
                <div class="search">
                    <form action="{{route('search')}}" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span
                                                class="fa fa-search"></span></button>
                                </span>
                        </div>
                    </form>
                </div>
                <div class="cart">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownCart"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-shopping-cart"></i>
                            @if(Cart::count() > 0)
                                <span class="badge">{{Cart::count()}}</span>
                            @else
                                (Trống)
                            @endif
                        </button>
                        @if(Cart::count() > 0)
                            <ul class="dropdown-menu dropdown-cart" aria-labelledby="dropdownCart">
                                <li class="clearfix"></li>
                                <li class="cart-body">
                                    @foreach(Cart::content() as $product)
                                        <div class="media">
                                            <a class="pull-left">
                                                <img src="{{$product->options->image}}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <span class="title">{{$product->name}}</span>
                                                <span class="amount">Số lượng: {{$product->qty}}</span>
                                                <span class="price">Giá: {{number_format($product->price)}}đ</span>
                                            </div>
                                            <a href="{{route('del-cart', ['id'=>$product->rowId])}}"
                                               class="cart-item-delete"><i class="fa fa-times"></i></a>
                                        </div>
                                    @endforeach
                                </li>
                                <li class="cart-bottom">
                                    <div class="cart-total text-right"><b style="color:#0277b8;">Tổng tiền:</b>
                                        <span class="cart-total-value">
                                            {{Cart::subtotal(0, '.', ',')}}đ
                                        </span>
                                    </div>
                                    <div class="center">
                                        <a href="{{route('destroyCart')}}" class="btn btn-danger">
                                            Xóa hết <i class="fa fa-trash"></i></a>
                                        <a href="{{route('getCart')}}" class="btn btn-primary">
                                            Giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                                        <a href="{{route('getCheckout')}}" class="btn btn-success">
                                            Thanh toán <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Body-->
    <div class="header-bottom">
        <nav class="navbar navbar-primary">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('index')}}">Trang chủ <span class="sr-only">(current)</span></a></li>
                        @foreach($parentCategories as $parentCategory)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{$parentCategory->name}}<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $childCategories = Category::where('parent_id', $parentCategory->id)->get();
                                    ?>
                                    @foreach($childCategories as $childCategory)
                                        <li>
                                            <a href="{{route('category', $childCategory->slug)}}">{{$childCategory->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li><a href="{{route('about')}}">Giới thiệu</a>
                        <li><a href="{{route('contact')}}">Liên hệ</a>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!--End Header bottom-->
</header>
<!--End Header-->