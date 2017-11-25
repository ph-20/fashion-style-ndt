@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Quên mật khẩu</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li class="active">Quên mật khẩu</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <div class="row">
                <div class="container">
                    <div class="form-login">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h3>Quên mật khẩu</h3>
                            @if(Session::has('message'))
                                <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                            @else
                                <div class="alert alert-info">* Vui lòng nhập Email của bạn</div>
                            @endif
                            <form action="{{route('sendEmail')}}" class="form-horizontal" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="email"
                                               placeholder="Nhập emai của bạn">
                                        <span class="label label-danger">{!! $errors->first('email') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" value="Gửi Email" class="btn btn-primary">
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