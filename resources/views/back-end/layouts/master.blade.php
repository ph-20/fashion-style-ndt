<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Style NDT</title>
    <base href="{{asset('')}}">
    <!--Required CSS-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style-admin.css">
    <!--Font family-->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
</head>
<body>

@include('back-end.layouts.header')

<section class="content container-fluid">
    @include('back-end.layouts.siderbar')

    @yield('content')

</section>
<!--End content-->
<div class="clearfix"></div>

@include('back-end.layouts.footer')