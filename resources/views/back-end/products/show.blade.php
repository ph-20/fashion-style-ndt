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
                        <span class="title-page">Thông tin sản phẩm</span>
                        <a href="{{route('products.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php
                    if ($product->type == 0) {
                        $type = "Nam";
                    } else {
                        $type = "Nữ";
                    }

                    ?>
                    <div class="col-md-3">
                        <img src="{{asset($product->image)}}" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered">
                            <tr>
                                <th class="col-sm-3">Tên</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th>Danh mục</th>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            <tr>
                                <th>Giá</th>
                                <td>{{$product->price}}</td>
                            </tr>
                            <tr>
                                <th>Khuyến mãi</th>
                                <td>
                                    @if($product->discount == 0)
                                        {{"Không"}}
                                    @else
                                        <p style="color: #f90;">{{number_format($product->discount)}}đ</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td>{{$type}}</td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td>{{$product->description}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop