@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="pull-left">
                <h3>Giỏ hàng</h3>
            </div>
            <div class="pull-right">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ol>
            </div>
            <div class="clearfix"></div>

            <article class="content-body">
                <div class="row">
                    <div class="table-reponsive shop-cart">
                        <table class="table table-striped">
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                            <tr>
                                <td class="title">
                                    <div class="media">
                                        <img src="bootstrap/images/products/1.jpg" class="pull-left" alt="">
                                        <div class="media-body">
                                            <p>Áo khoác da K201</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price"><span>300.000đ</span></td>
                                <td class="quantity">
                                    <select name="quantity" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td class="total"><span>300.000đ</span></td>
                                <td><a href="#" class="btn btn-danger">Hủy</a></td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <div class="media">
                                        <img src="bootstrap/images/products/1.jpg" class="pull-left" alt="">
                                        <div class="media-body">
                                            <p>Áo khoác da K201</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price"><span>300.000đ</span></td>
                                <td class="quantity">
                                    <select name="quantity" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td class="total"><span>300.000đ</span></td>
                                <td><a href="#" class="btn btn-danger">Hủy</a></td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <div class="media">
                                        <img src="bootstrap/images/products/1.jpg" class="pull-left" alt="">
                                        <div class="media-body">
                                            <p>Áo khoác da K201</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price"><span>300.000đ</span></td>
                                <td class="quantity">
                                    <select name="quantity" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td class="total"><span>300.000đ</span></td>
                                <td><a href="#" class="btn btn-danger">Hủy</a></td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <div class="media">
                                        <img src="bootstrap/images/products/1.jpg" class="pull-left" alt="">
                                        <div class="media-body">
                                            <p>Áo khoác da K201</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price"><span>300.000đ</span></td>
                                <td class="quantity">
                                    <select name="quantity" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td class="total"><span>300.000đ</span></td>
                                <td><a href="#" class="btn btn-danger">Hủy</a></td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <div class="media">
                                        <img src="bootstrap/images/products/1.jpg" class="pull-left" alt="">
                                        <div class="media-body">
                                            <p>Áo khoác da K201</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price"><span>300.000đ</span></td>
                                <td class="quantity">
                                    <select name="quantity" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td class="total"><span>300.000đ</span></td>
                                <td><a href="#" class="btn btn-danger">Hủy</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="cart-totals pull-right">
                    <div class="cart-totals-row"><h5 class="cart-total-title">Thống kê giỏ hàng</h5></div>
                    <div class="cart-totals-row"><span class="title">Số lượng:</span> <span class="quantity">5</span></div>
                    <div class="cart-totals-row"><span class="title">Tổng tiền:</span> <span class="total">1.500.000đ</span></div>
                    <a href="#" class="btn btn-primary">Thanh toán</a>
                </div>
            </article>
            <!--End Shopping Cart-->
        </div>
    </section>
    <!--End content-->
@stop