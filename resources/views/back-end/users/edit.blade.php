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
                        <span class="title-page">Chỉnh sửa người dùng</span>
                        <a href="{{route('users.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('alert'))
                        <div class="alert alert-success">{{Session::get('alert')}}</div>
                    @endif
                    <form action="{{route('users.update', $user->id)}}" class="form-horizontal" method="POST">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="{{$user->email}}" readonly>
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
                                <label class="col-md-4 control-label">Quyền hạn</label>
                                <div class="col-md-8">
                                    <select name="role" id="" class="form-control">
                                        <option value="0"
                                                {{$user->role == 0 ? "selected" : ""}}
                                        >Admin
                                        </option>
                                        <option value="1"
                                                {{$user->role == 1 ? "selected" : ""}}
                                        >Bán hàng
                                        </option>
                                        <option value="2"
                                                {{$user->role == 2 ? "selected" : ""}}
                                        >Khách hàng
                                        </option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('role') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Trạng thái</label>
                                <div class="col-md-8">
                                    <select name="status" id="" class="form-control">
                                        <option value="1"
                                                {{$user->status == 1 ? "selected" : ""}}
                                        >Hoạt động
                                        </option>
                                        <option value="0"
                                                {{$user->status == 0 ? "selected" : ""}}
                                        >Khóa
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Họ tên</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{$user->fullname}}"
                                           placeholder="Nhập họ tên của bạn" class="form-control">
                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Giới tính</label>
                                <div class="col-md-8">
                                    <select name="gender" id="" class="form-control">
                                        <option value="0"
                                                {{$user->gender == 0 ? "selected" : ""}}
                                        >Nam
                                        </option>
                                        <option value="1"
                                                {{$user->gender == 1 ? "selected" : ""}}
                                        >Nữ
                                        </option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('gender') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ngày sinh</label>
                                <div class="col-md-8">
                                    <input type="date" name="birthday" value="{{$user->birthday}}"
                                           placeholder="Nhập ngày sinh của bạn" class="form-control">
                                    <span class="label label-danger">{!! $errors->first('birthday') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Điện thoại</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" value="{{$user->phone}}"
                                           placeholder="Nhập số điện thoại của bạn" class="form-control">
                                    <span class="label label-danger">{!! $errors->first('phone') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Địa chỉ</label>
                                <div class="col-md-8">
                                    <input type="text" name="address" value="{{$user->address}}"
                                           placeholder="Nhập địa chỉ của bạn" class="form-control">
                                    <span class="label label-danger">{!! $errors->first('address') !!}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" value="Chỉnh sửa" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop