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
                        <span class="title-page">Danh sách sản phẩm</span>
                        <a href="{{route('products.create')}}" class="btn btn-success pull-right"><span
                                    class="fa fa-plus"></span> Thêm mới</a>
                    </h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-{{Session::get('alert')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Hình ảnh</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Khuyến mãi</th>
                                <th class="text-center">Giới tính</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center">Sửa</th>
                                <th class="text-center">Xóa</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($products as $product)
                                <?php
                                if ($product->type == 0) {
                                    $type = "Nam";
                                } else {
                                    $type = "Nữ";
                                }
                                ?>
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td class="text-center">
                                        <img src="{{asset($product->image)}}" alt="" style="width: 50px; height: auto;">
                                    </td>
                                    <td><a href="{{route('products.show', $product->id)}}">{{$product->name}}</a></td>
                                    <td class="text-center">{{number_format($product->price)}}đ</td>
                                    <td class="text-center">
                                        @if($product->discount == 0)
                                            {{"Không"}}
                                        @else
                                            <p style="color: #f90;">{{number_format($product->discount)}}đ</p>
                                        @endif
                                    </td>
                                    <td class="text-center">{!! $type !!}</td>
                                    <td class="text-center">{!! $product->category->name !!}</td>
                                    <td class="text-center">
                                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning"><span
                                                    class="fa fa-pencil"></span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop