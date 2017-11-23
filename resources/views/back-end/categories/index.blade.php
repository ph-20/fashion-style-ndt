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
                    @if(Session::has('alert'))
                        <div class="alert alert-success">{{Session::get('alert')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Parent_id</th>
                                <th class="text-center">Sửa</th>
                                <th class="text-center">Xóa</th>
                            </tr>

                            @foreach($categories as $category)
                                <?php
                                if($category->parent_id == 0) {
                                    $parent_id = "<span class='label label-success'>0</span>";
                                } elseif ($category->parent_id == 1) {
                                    $parent_id = "<span class='label label-info'>Thời Trang Áo</span>";
                                } elseif ($category->parent_id == 2) {
                                    $parent_id = "<span class='label label-warning'>Thời Trang Quần</span>";
                                }else($category->parent_id == 3){
                                    $parent_id = "<span class='label label-primary'>Phụ kiệ</span>"};


                                if ($category->type == 0) {
                                    $type = "<span class='label label-success'>Nam</span>";
                                } else {
                                    $type = "<span class='label label-danger'>Nu</span>";
                                }



                                ?>
                                <tr>
                                    <td class="text-center">{{$category->id}}</td>
                                   <td >{{$category->name}}</td>
                                    <td>{{$category->name = str_slug($category->name)}}</td>
                                    <td class="text-center">{!! $parent_id!!}</td>
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