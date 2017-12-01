@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Đặt Hàng</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li class="active">Đặt hàng</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <div class="row">
                <form action="">
                    <div class="col-sm-6">
                        <h4>Thông tin khách hàng</h4>
                        <div class="form-group">
                            <label>Họ tên*</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập họ tên">
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="text" class="form-control" name="email" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label>Điện thoại*</label>
                            <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ*</label>
                            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                            <label>Ghi chú*</label>
                            <textarea name="note" class="form-control" rows="5" placeholder="Nhập ghi chú"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Đơn hàng của bạn</h4>
                        <div class="order-body">
                            <div class="your-order-item">

                                <div class="media">
                                    <div class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="bootstrap/images/products/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="title">Sample Woman Top</span>
                                        <span class="amount">Số lượng: 1</span>
                                        <span class="price">Giá: 300.000đ</span>
                                    </div>
                                </div>
                            </div>

                            <div class="your-order-total">
                                <div class="pull-left">Tổng tiền:</div>
                                <div class="pull-right">1.500.000đ</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Đặt hàng</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!--End content-->
@stop