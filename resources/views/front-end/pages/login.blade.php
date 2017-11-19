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
                            @if(Session::has('alert'))
                                <div class="alert alert-success">{{Session::get('alert')}}</div>
                            @endif
                            <div class="alert alert-info">* Vui lòng đăng nhập để tiếp tục</div>
                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="email" placeholder="Nhập emai của bạn">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Mật khẩu</label>
                                    <div class="col-md-10">
                                        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn" class="form-control">
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