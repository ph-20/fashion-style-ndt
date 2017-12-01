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
                @if(count($products) > 0)
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
                                @foreach($products as $product)
                                    <tr>
                                        <td class="title">
                                            <div class="media">
                                                <img src="{{$product['item']['image']}}" class="pull-left" alt="">
                                                <div class="media-body">
                                                    <p>{{$product['item']['name']}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <span>
                                                @if($product['item']['discount'] > 0)
                                                    {{number_format($product['item']['discount'])}}đ
                                                @else
                                                    {{number_format($product['item']['price'])}}đ
                                                @endif
                                            </span>
                                        </td>
                                        <td class="quantity">
                                            <span>
                                                {{$product['qty']}}
                                            </span>
                                        </td>
                                        <td class="total">
                                            <span>
                                                {!! number_format($product['price']) !!}đ
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{route('del-cart', $product['item']['id'])}}"
                                               class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <div class="cart-totals pull-right">
                        <div class="cart-totals-row">
                            <h5 class="cart-total-title">Thống kê giỏ hàng</h5>
                        </div>
                        <div class="cart-totals-row">
                            <span class="title">Số lượng:</span>
                            <span class="quantity">{{$totalQty}}</span>
                        </div>
                        <div class="cart-totals-row">
                            <span class="title">Tổng tiền:</span>
                            <span class="total">{{number_format($totalPrice)}}đ</span>
                        </div>
                        <a href="{{route('getCheckout')}}" class="btn btn-primary">Thanh toán</a>
                    </div>
                @else
                    <div class="alert alert-danger">Giỏ hàng đang trống.</div>
                @endif
            </article>
            <!--End Shopping Cart-->
        </div>
    </section>
    <!--End content-->
@stop