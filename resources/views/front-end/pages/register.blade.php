@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Đăng kí</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li class="active">Đăng kí</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <div class="row">
                <div class="container">
                    <div class="form-login">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h3>Đăng kí thành viên</h3>
                            <div class="alert alert-info">* Vui lòng điền đầy đủ thông tin</div>
                            <form action="{{route('postRegister')}}" class="form-horizontal" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="email"
                                               placeholder="Nhập emai của bạn">
                                        <span class="label label-danger">{!! $errors->first('email') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Mật khẩu</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('password') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Xác nhận mật khẩu</label>
                                    <div class="col-md-8">
                                        <input type="password" name="re_password" placeholder="Nhập  lại mật khẩu của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('re_password') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Họ tên</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" placeholder="Nhập họ tên của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Giới tính</label>
                                    <div class="col-md-8">
                                        <select name="gender" id="" class="form-control">
                                            <option value="0" selected>Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                        <span class="label label-danger">{!! $errors->first('gender') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Ngày sinh</label>
                                    <div class="col-md-8">
                                        <input type="date" name="birthday" placeholder="Nhập ngày sinh của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('birthday') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Điện thoại</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" placeholder="Nhập số điện thoại của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('phone') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Địa chỉ</label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" placeholder="Nhập địa chỉ của bạn"
                                               class="form-control">
                                        <span class="label label-danger">{!! $errors->first('address') !!}</span>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" value="Đăng kí" class="btn btn-primary">
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