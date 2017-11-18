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
                <li class="active">Tổng quan</li>
            </ul><!--.breadcrumb-->
        </div>
        <!--End Breadcrumbs-->

        <div class="page-content"></div>
    </article>
    <!--End Main Content-->
@stop