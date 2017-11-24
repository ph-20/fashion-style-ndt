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
                        <span class="title-page">Chỉnh sửa danh mục</span>
                        <a href="{{route('categories.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('alert'))
                        <div class="alert alert-success">{{Session::get('alert')}}</div>
                    @endif
                    <form action="{{route('categories.update', $category->id)}}" class="form-horizontal" method="POST">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tên Loại Sản Phẩm</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="{{$category->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Loại</label>
                                <div class="col-md-8">
                                    <select name="role" id="" class="form-control">
                                        <option value="0"{{$category->type == 0 ? "selected" : ""}} >Nam</option>
                                        <option value="1"{{$category->type == 1 ? "selected" : ""}}>Nữ</option>
                                    </select>
                                    <span class="label label-danger">{!! $errors->first('type') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">ParentId</label>
                                <div class="col-md-8">
                                    <select name="parent_id" id="" class="form-control">
                                        <option value="0"
                                                {{$category->parent_id == 0 ? "selected" : ""}}
                                        >0
                                        </option>
                                        <option value="1"
                                                {{$category->parent_id == 1 ? "selected" : ""}}
                                        >Thời Trang Áo
                                        </option>
                                        <option value="2"
                                                {{$category->parent_id ==2 ? "selected" : ""}}
                                        >Thời Trang Quần
                                        </option>
                                        <option value="3"
                                                {{$category->parent_id == 3 ? "selected" : ""}}
                                        >Phụ Kiện
                                        </option>
                                    </select>
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