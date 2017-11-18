@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Không tìm thấy trang</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li class="active">Page 404</li>
                    </ol>
                </div>
            </div>
            <!--End Top Content-->

            <div class="row">
                <div class="container text-center">
                    <h2>Rất tiếc! Không thể tìm thấy trang đó!</h2>
                    <p>Có vẻ như không có gì được tìm thấy tại trang này. Bạn có thể quay về Trang chủ?</p>
                    <a href="#" class="btn btn-default">Quay lại trang chủ</a>
                </div>
            </div>

        </div>
    </section>
    <!--End content-->
@stop