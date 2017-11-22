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
                        <span class="title-page">Đổi mật khẩu</span>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="col-sm-offset-1 col-sm-6">
                        @if(Session::has('message'))
                            <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                        @endif
                        <form action="{{route('postChangePass')}}" class="form-horizontal" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
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
                            <div class="form-group text-center">
                                <input type="submit" value="Thay đổi" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop