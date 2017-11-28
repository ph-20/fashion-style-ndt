@extends('back-end.layouts.master')

@section('content')
    <article class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/admin">Trang chủ</a>
                    <span class="divider">
                        <i class="fa fa-angle-double-right"></i>
                    </span>
                </li>
                <li class="active">Đặt hàng</li>
            </ul><!--.breadcrumb-->
        </div>
        <!--End Breadcrumbs-->

        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <span class="title-page">Chi tiết đặt hàng</span>
                        <form action="{{route('orders.update', $order->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <button type="submit" class="btn btn-success pull-right">
                                <span class="fa fa-cog"></span> Xử lý
                            </button>
                        </form>
                    </h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <div class="col-sm-3 text-right"><b>Tên khách hàng:</b></div>
                            <div class="col-sm-9"><p>{{$order->customer_name}}</p></div>
                            <div class="col-sm-3 text-right"><b>Email:</b></div>
                            <div class="col-sm-9"><p>{{$order->customer_email}}</p></div>
                            <div class="col-sm-3 text-right"><b>Địa chỉ:</b></div>
                            <div class="col-sm-9"><p>{{$order->customer_address}}</p></div>
                            <div class="col-sm-3 text-right"><b>Điện thoại:</b></div>
                            <div class="col-sm-9"><p>{{$order->customer_phone}}</p></div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p><b>Ngày đặt hàng:</b> 27/10/2017</p>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên sản phẩm</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Đơn giá</th>
                                <th class="text-center">Thành tiền</th>
                            </tr>
                            <?php
                            $i = 1;
                            $total = 0;
                            ?>
                            @foreach($products as $product)
                                <?php
                                if ($product->product->discount > 0) {
                                    $price = $product->product->discount;
                                } else {
                                    $price = $product->product->price;
                                }
                                $sum = $price * $product->quantity;
                                $total += $sum;
                                ?>
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td>{{$product->product->name}}</td>
                                    <td class="text-center">{{$product->quantity}}</td>
                                    <td class="text-center">{{number_format($price)}}đ</td>
                                    <td class="text-center">{{number_format($sum)}}đ</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="pull-right"><p><b>Tổng tiền:</b> {{number_format($total)}}đ</p></div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop