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
                <li class="active">Người dùng</li>
            </ul><!--.breadcrumb-->
        </div>
        <!--End Breadcrumbs-->

        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <span class="title-page">Thêm mới người dùng</span>
                        <a href="{{route('users.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="col-sm-offset-1 col-sm-6">
                        @if(Session::has('alert'))
                            <div class="alert alert-success">{{Session::get('alert')}}</div>
                        @endif
                        <form action="{{route('users.store')}}" class="form-horizontal" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Nhập emai của bạn" value="{{old('email')}}">
                                    <span class="label label-danger">{!! $errors->first('email') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mật khẩu (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" placeholder="Nhập mật khẩu của bạn"
                                           class="form-control">
                                    <span class="label label-danger">{!! $errors->first('password') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Xác nhận mật khẩu (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="password" name="re_password" placeholder="Nhập  lại mật khẩu của bạn"
                                           class="form-control">
                                    <span class="label label-danger">{!! $errors->first('re_password') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Quyền hạn (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <select name="role" id="" class="form-control">
                                        <option value="0" selected>Admin</option>
                                        <option value="1">Bán hàng</option>
                                        <option value="2">Khách hàng</option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('gender') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Họ tên (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" placeholder="Nhập họ tên của bạn"
                                           class="form-control" value="{{old('name')}}">
                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Giới tính (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <select name="gender" id="" class="form-control">
                                        <option value="0" selected>Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('gender') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ngày sinh (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="date" name="birthday" placeholder="Nhập ngày sinh của bạn"
                                           class="form-control" value="{{old('birthday')}}">
                                    <span class="label label-danger">{!! $errors->first('birthday') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Điện thoại (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" placeholder="Nhập số điện thoại của bạn"
                                           class="form-control" value="{{old('phone')}}">
                                    <span class="label label-danger">{!! $errors->first('phone') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Địa chỉ (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="text" name="address" placeholder="Nhập địa chỉ của bạn"
                                           class="form-control" value="{{old('address')}}">
                                    <span class="label label-danger">{!! $errors->first('address') !!}</span>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Thêm mới" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop