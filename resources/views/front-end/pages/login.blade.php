@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Đăng nhập</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li class="active">Đăng nhập</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <div class="row">
                <div class="container">
                    <div class="form-login">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h3>Đăng nhập</h3>
                            @if(Session::has('message'))
                                <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                            @else
                                <div class="alert alert-info">* Vui lòng đăng nhập để tiếp tục</div>
                            @endif
                            <form action="{{route('postLogin')}}" class="form-horizontal" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email <b style="color:Tomato;">*</b></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name='email'
                                               placeholder="Nhập emai của bạn" value="{{old('email')}}">
                                        <span class="label label-danger">{!! $errors->first('email') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Mật khẩu <b style="color:Tomato;">*</b></label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('password') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-10">
                                        <a href="{{route('password.request')}}">Quên mật khẩu!</a>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" value="Đăng nhập" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End content-->
@stop