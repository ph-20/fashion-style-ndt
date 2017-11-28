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
                                    <input type="text" name="name" class="form-control" value="{{$category->name }}">
                                </div>
                            </div>
                            @if(!count($childCategory) > 0)
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Loại</label>
                                    <div class="col-md-8">
                                        <select name="type" id="type_category" class="form-control">
                                            <option value="0" {{$category->type == 0 ? "selected" : ""}}>Danh mục cha
                                            </option>
                                            <option value="1" {{$category->type == 1 ? "selected" : ""}}>Danh mục con
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="parent_id">
                                    <label class="col-md-4 control-label">Danh mục cha</label>
                                    <div class="col-md-8">
                                        <select name="parent_id" id="" class="form-control">
                                            @foreach($parentCategories as $parentCategory)
                                                <option value="{{$parentCategory->id}}"
                                                        {{$parentCategory->id == $category->parent_id ? "selected" : ""}}>
                                                    {{$parentCategory->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
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