<div class="list-modal">
    <!-- Modal -->
    <div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalProductLabel">Thông tin sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-4">
                            <img src="bootstrap/images/products/1.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="title-product">Áo khoác len K201</h5>
                            <p class="category-product">Thời Trang Áo <span class="fa fa-angle-double-right"></span> Áo
                                khoác</p>
                            <p class="price-product"><b>Giá:</b> 200.000đ</p>
                            <p class="description">Áo Khoác Da Đen AK209 cách điệu với túi cá tính ở ngực, màu đen nam
                                tính, mạnh mẽ tạo nên phong cách cực chất cho chàng. Kiểu dáng bắt mắt, tay dài phối
                                khóa kéo cách điệu, dáng cổ tròn cùng các đường cắt may tinh tế. Hai chiếc túi hông sâu
                                rộng được kết hợp khóa kéo linh hoạt, rất tiện lợi.</p>
                            <button type="submit" class="btn btn-default">Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal Product-->
</div>
<!--End List Model-->

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
                                    <li><a href="{{route('dashboard')}}">Quản trị nội dung</a></li>
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
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập từ khóa...">
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
                            <i class="fa fa-shopping-cart"></i> (Trống)</i>
                        </button>
                        <ul class="dropdown-menu dropdown-cart" aria-labelledby="dropdownCart">
                            <li class="cart-body">
                                <div class="media">
                                    <a class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                    <a href="#" class="cart-item-delete"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="media">
                                    <a class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                    <a href="#" class="cart-item-delete"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="media">
                                    <a class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                    <a href="#" class="cart-item-delete"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="media">
                                    <a class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                    <a href="#" class="cart-item-delete"><i class="fa fa-times"></i></a>
                                </div>
                            </li>
                            <li class="cart-bottom">
                                <div class="cart-total text-right"><b style="color:#0277b8;">Tổng tiền:</b>
                                    <span class="cart-total-value">1.000.000đ</span>
                                </div>
                                <div class="center">
                                    <a href="checkout.html" class="btn btn-primary text-center">Đặt hàng <i
                                                class="fa fa-chevron-right"></i></a>
                                </div>
                            </li>
                        </ul>
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Thời Trang Áo<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($categoty as $loai)
                                    <li><a href="{{route('category')}}">{{$loai->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Thời Trang Quần<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($categoty1 as $loai)
                                    <li><a href="{{route('category')}}">{{$loai->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Phụ Kiện<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($categoty2 as $loai)
                                    <li><a href="{{route('category')}}">{{$loai->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
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