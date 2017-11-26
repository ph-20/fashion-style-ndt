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
                <li class="active">Sản phẩm</li>
            </ul><!--.breadcrumb-->
        </div>
        <!--End Breadcrumbs-->

        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <span class="title-page">Thêm mới sản phẩm</span>
                        <a href="{{route('products.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
                <div class="panel-body">
                    @if(count($errors) > 0)
                        @foreach($errors as $error)
                            {{$error}}
                        @endforeach
                    @endif
                    <div class="col-sm-offset-1 col-sm-8">
                        @if(Session::has('message'))
                            <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                        @endif
                        <form action="{{route('products.store')}}" enctype="multipart/form-data" class="form-horizontal"
                              method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Tên sản phẩm (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Nhập tên sản phẩm" value="{{old('name')}}">
                                    <span class="label label-danger">{!! $errors->first('name') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Hình ảnh (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" placeholder="Chọn hình ảnh sản phẩm"
                                           class="form-control">
                                    <span class="label label-danger">{!! $errors->first('image') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Giá sản phẩm [Đồng] (<b
                                            style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" placeholder="Nhập giá sản phẩm"
                                           class="form-control" value="{{old('price')}}">
                                    <span class="label label-danger">{!! $errors->first('price') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Giá khuyến mãi [Đồng] (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <input type="number" name="discount" placeholder="Nhập giá khuyến mãi"
                                           class="form-control" value="{{old('discount')}}">
                                    <span class="label label-danger">{!! $errors->first('discount') !!}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Giới tính (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <select name="type" id="" class="form-control">
                                        <option value="0" selected>Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Loại sản phẩm (<b
                                            style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <select name="categoryID" id="" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mô tả (<b style="color:red;">*</b>)</label>
                                <div class="col-md-8">
                                    <textarea name="description" rows="10" class="form-control"
                                              placeholder="Nhập mô tả sản phẩm">{{old('description')}}</textarea>
                                    <span class="label label-danger">{!! $errors->first('description') !!}</span>
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