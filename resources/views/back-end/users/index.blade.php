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
                        <span class="title-page">Danh sách người dùng</span>
                        <a href="{{route('users.create')}}" class="btn btn-success pull-right"><span
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
                                <th class="text-center">#</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Quyền</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Sửa</th>
                                <th class="text-center">Xóa</th>
                            </tr>

                            @foreach($users as $user)
                                <?php
                                if ($user->role == 0) {
                                    $role = "<span class='label label-success'>Admin</span>";
                                } elseif ($user->role == 1) {
                                    $role = "<span class='label label-info'>Bán hàng</span>";
                                } elseif ($user->role == 2) {
                                    $role = "<span class='label label-warning'>Khách hàng</span>";
                                }

                                if ($user->status == 1) {
                                    $status = "<span class='label label-success'>Hoạt động</span>";
                                } else {
                                    $status = "<span class='label label-danger'>Khóa</span>";
                                }
                                ?>
                                <tr>
                                    <td class="text-center">{{$user->id}}</td>
                                    <td><a href="{{route('users.show', $user->id)}}">{{$user->fullname}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td class="text-center">{!! $role !!}</td>
                                    <td class="text-center">{!! $status !!}</td>
                                    <td class="text-center"><a href="{{route('users.edit', $user->id)}}"
                                                               class="btn btn-warning"><span
                                                    class="fa fa-pencil"></span></a></td>
                                    <td class="text-center">
                                        <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop