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
                <li class="active">Đặt hàng</li>
            </ul><!--.breadcrumb-->
        </div>
        <!--End Breadcrumbs-->

        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <span class="title-page">Danh sách đặt hàng</span>
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
                                <th class="text-center">Ghi chú</th>
                                <th class="text-center">Thời gian đặt</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Xử lý</th>
                                <th class="text-center">Hủy</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($orders as $order)
                                <?php
                                if ($order->status == 0) {
                                    $status = "<span class='label label-warning'>Chưa xử lý</span>";
                                } else if ($order->status == 1) {
                                    $status = "<span class='label label-success'>Đã xử lý</span>";
                                } else if ($order->status == 2) {
                                    $status = "<span class='label label-danger'>Đã hủy</span>";
                                }
                                ?>
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td>{{$order->customer_name}}</td>
                                    <td>{{$order->note}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td class="text-center">{!! $status !!}</td>
                                    <td class="text-center">
                                        @if($order->status == 0)
                                            <a href="{{route('orders.edit', $order->id)}}" class="btn btn-success">Xử
                                                lý</a>
                                        @else
                                            <a href="{{route('orders.edit', $order->id)}}" class="btn btn-success"
                                               disabled>Xử lý</a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($order->status == 0)
                                            <form action="{{route('orders.destroy', $order->id)}}" method="POST">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="btn btn-danger">Hủy</button>
                                            </form>
                                        @else
                                            <form action="{{route('orders.destroy', $order->id)}}" method="POST">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="btn btn-danger" disabled>Hủy</button>
                                            </form>
                                        @endif
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