@extends('front-end.layouts.master')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <h3>Liên hệ</h3>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang Chủ</a></li>
                        <li class="active">Liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.842742669354!2d108.21226891428655!3d16.073648243590352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421837d6415589%3A0xa8bb038e72188a!2zOTIgUXVhbmcgVHJ1bmcsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1510672581961"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="container contact">
            <div class="col-sm-7">
                <h3 class="title-contact">Liên hệ</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani
                    m id est laborum.</p>
                <form action="#" method="post" class="contact-form">
                    <div class="form-group">
                        <input name="name" type="text" placeholder="Nhập tên người gửi" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" placeholder="Nhập địa chỉ email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="title" type="text" placeholder="Tiêu đề" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Nội dung" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Gửi <i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <h3 class="title-contact">Thông tin liên hệ</h3>
                <h6 class="title-info">Address</h6>
                <p>
                    Suite 127 / 267 – 277 Brussel St,<br>
                    62 Croydon, NYC <br>
                    Newyork
                </p>
                <h6 class="title-info">Business Enquiries</h6>
                <p>
                    Doloremque laudantium, totam rem aperiam, <br>
                    inventore veritatio beatae. <br>
                    <a href="mailto:biz@betadesign.com">biz@betadesign.com</a>
                </p>
                <h6 class="title-info">Employment</h6>
                <p>
                    We’re always looking for talented persons to <br>
                    join our team. <br>
                    <a href="hr@betadesign.com">hr@betadesign.com</a>
                </p>
            </div>
        </div>
    </section>
    <!--End content-->
@stop