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
                <li class="active">Danh mục</li>
            </ul><!--.breadcrumb-->
        </div>
        <!--End Breadcrumbs-->

        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <span class="title-page">Thêm mới danh mục sản phẩm</span>
                        <a href="{{route('categories.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="col-sm-offset-1 col-sm-6">
                        @if(Session::has('alert'))
                            <div class="alert alert-success">{{Session::get('alert')}}</div>
                        @endif
                        <form action="{{route('categories.store')}}" class="form-horizontal" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Nhập tên danh mục sản phẩm">
                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Loại</label>
                                <div class="col-md-8">
                                    <select name="type" id="" class="form-control">
                                        <option value="0" selected>Nam</option>
                                        <option value="1"> Nữ</option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('type') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">ParentId</label>
                                <div class="col-md-8">
                                    <select name="parent_id" id="" class="form-control">
                                        <option value="0" selected>0</option>
                                        <option value="1">Thời Trang Áo</option>
                                        <option value="2">Thời Trang Quần</option>
                                        <option value="3">Phụ Kiện</option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('parent_id') !!}</span>
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