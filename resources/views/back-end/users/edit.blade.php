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
                            <div class="clearfix"></div>
                            <div class="form-group text-center">
                                <input type="submit" value="Chỉnh sửa" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop