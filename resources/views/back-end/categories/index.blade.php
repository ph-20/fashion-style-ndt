<?php
use Shop\Category;
?>
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
                        <span class="title-page">Danh sách danh mục</span>
                        <a href="{{route('categories.create')}}" class="btn btn-success pull-right"><span
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
                                <th class="text-center">Tên</th>
                               {{-- <th class="text-center">Đường dẫn</th>--}}
                                <th class="text-center">Danh mục cha</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center">Sửa</th>
                                <th class="text-center">Xóa</th>
                            </tr>

                            @foreach($categories as $category)
                                <?php
                                $parent_category = Category::where('id', $category->parent_id)->first();

                                if ($category->type == 0) {
                                    $type = "<span class='label label-warning'>Danh mục cha</span>";
                                } else {
                                    $type = "<span class='label label-info'>Danh mục con</span>";
                                }

                                ?>
                                <tr>
                                    <td class="text-center">{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                  {{--  <td>{{$category->name = str_slug($category->name)}}</td>--}}
                                    <td class="text-center">
                                        {!! ($category->parent_id) ? $parent_category['name'] : "<span class='label label-danger'>Không có</span>" !!}
                                        {{--{{$parent_category['name']}}--}}
                                    </td>
                                    <td class="text-center">{!!$type !!}</td>
                                    <td class="text-center"><a href="{{route('categories.edit', $category->id)}}"
                                                               class="btn btn-warning"><span
                                                    class="fa fa-pencil"></span></a></td>
                                    <td class="text-center">
                                        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop