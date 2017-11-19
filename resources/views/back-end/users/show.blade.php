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
                        <span class="title-page">Thông tin người dùng</span>
                        <a href="{{route('users.index')}}" class="btn btn-default pull-right"><span
                                    class="fa fa-arrow-left"></span> Trở về</a>
                    </h3>
                </div>
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

                if ($user->gender == 0) {
                    $gender = "Nam";
                } else {
                    $gender = "Nữ";
                }
                ?>
                <div class="panel-body">
                    <div class="col-md-offset-2 col-md-6">
                        <table class="table table-bordered">
                            <tr>
                                <th>Ẹmail</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th>Quyền</th>
                                <td>{!! $role  !!}</td>
                            </tr>
                            <tr>
                                <th>Trạng thái</th>
                                <td>{!! $status !!}</td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Họ tên</th>
                                <td>{{$user->fullname}}</td>
                            </tr>
                            <tr>
                                <th>Ngày sinh</th>
                                <td>{{$user->birthday}}</td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td>{{$gender}}</td>
                            </tr>
                            <tr>
                                <th>Điện thoại</th>
                                <td>{{$user->phone}}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>{{$user->address}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--End Main Content-->
@stop