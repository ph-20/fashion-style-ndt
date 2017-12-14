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
                @if(Cart::count() > 0)
                    <form action="{{route('postCheckout')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="col-sm-6">
                            @if(Auth::check())
                                <div class="alert alert-info">
                                    Đơn hàng của <b>{{Auth::user()->fullname}}</b>
                                </div>
                                <div class="form-group">
                                    <label>Họ tên <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{Auth::user()->fullname}}">
                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Email <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="email"
                                           value="{{Auth::user()->email}}">
                                    <span class="label label-danger">{!! $errors->first('email') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="phone"
                                           value="{{Auth::user()->phone}}">
                                    <span class="label label-danger">{!! $errors->first('phone') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="address"
                                           value="{{Auth::user()->address}}">
                                    <span class="label label-danger">{!! $errors->first('address') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Ghi chú <b style="color:Tomato;">*</b></label>
                                    <textarea name="note" class="form-control" rows="5"
                                              placeholder="Nhập ghi chú">{{old('note')}}</textarea>
                                    <span class="label label-danger">{!! $errors->first('note') !!}</span>
                                </div>
                            @else
                                <h4>Thông tin khách hàng</h4>
                                <div class="form-group">
                                    <label>Họ tên <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="name" placeholder="Nhập họ tên"
                                           value="{{old('name')}}">
                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Email <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="email" placeholder="Nhập email"
                                           value="{{old('email')}}">
                                    <span class="label label-danger">{!! $errors->first('email') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="Nhập số điện thoại" value="{{old('phone')}}">
                                    <span class="label label-danger">{!! $errors->first('phone') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ <b style="color:Tomato;">*</b></label>
                                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ"
                                           value="{{old('address')}}">
                                    <span class="label label-danger">{!! $errors->first('address') !!}</span>
                                </div>
                                <div class="form-group">
                                    <label>Ghi chú <b style="color:Tomato;">*</b></label>
                                    <textarea name="note" class="form-control" rows="5"
                                              placeholder="Nhập ghi chú">{{old('note')}}</textarea>
                                    <span class="label label-danger">{!! $errors->first('note') !!}</span>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6 checkout">
                            <h4>Đơn hàng của bạn</h4>
                            <div class="order-body">
                                <div class="your-order-item">
                                    @foreach($products as $product)
                                        <div class="media">
                                            <div class="pull-left">
                                                <img src="{{$product->options->image}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="title">{{$product->name}}</span>
                                                <span class="amount">Số lượng: {{$product->qty}}</span>
                                                <span class="price">Thành tiền: {{number_format($product->price)}}
                                                    đ</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="your-order-total">
                                    <div class="pull-left">Tổng tiền:</div>
                                    <div class="pull-right">{{Cart::subtotal(0, '.', ',')}}đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success pull-right">Thanh toán</button>
                        </div>
                    </form>
                @else
                    @if(Session::has('message'))
                        <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                        <a href="{{route('index')}}" class="btn btn-default text-center">Trở về Trang chủ</a>
                    @else
                        <div class="alert alert-danger">Giỏ hàng đang trống.</div>
                        <a href="{{route('index')}}" class="btn btn-default text-center">Trở về Trang chủ</a>
                    @endif
                @endif
            </div>

        </div>
    </section>
    <!--End content-->
@stop