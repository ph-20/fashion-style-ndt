@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Hồ sơ</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Hồ sơ</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <div class="row">
                <div class="container">
                    <div class="form-login">
                        @if(Session::has('message'))
                            <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                        @endif
                        <div class="col-sm-10 col-sm-offset-1">
                            <form action="{{route('postProfile')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <div class="modal-body">
                                    <div class="col-sm-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5>Thông tin tài khoản</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                           value="{{Auth::user()->email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                    <input type="password" class="form-control" name="password"
                                                           placeholder="Mật khẩu">
                                                    <span class="label label-danger">{!! $errors->first('password') !!}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Xác nhận mật khẩu</label>
                                                    <input type="password" class="form-control" name="re_password"
                                                           placeholder="Xác nhận mật khẩu">
                                                    <span class="label label-danger">{!! $errors->first('re_password') !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End col-sm-6-->
                                    <div class="col-sm-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5>Thông tin chi tiết</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" class="form-control" name="name"
                                                           value="{{Auth::user()->fullname}}">
                                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày sinh</label>
                                                    <input type="date" class="form-control" name="birthday"
                                                           value="{{Auth::user()->birthday}}">
                                                    <span class="label label-danger">{!! $errors->first('birthday') !!}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Giới tính</label>
                                                    <select name="gender" id="" class="form-control">
                                                        <option value="0"
                                                        @if(Auth::user()->gender == 0) {{"selected"}} @endif
                                                        >Nam
                                                        </option>
                                                        <option value="1"
                                                        @if(Auth::user()->gender == 1) {{"selected"}} @endif
                                                        >Nữ
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Điện thoại</label>
                                                    <input type="text" class="form-control" name="phone"
                                                           value="{{Auth::user()->phone}}">
                                                    <span class="label label-danger">{!! $errors->first('phone') !!}</span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control" name="address"
                                                           value="{{Auth::user()->address}}">
                                                    <span class="label label-danger">{!! $errors->first('address') !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
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