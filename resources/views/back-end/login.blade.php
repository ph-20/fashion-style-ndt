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

<section class="login container-fluid">
    <h3 class="text-center"><a href="{{route('index')}}" class="logo" style="color: #fff;">Fashion Style NDT</a></h3>
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-primary">
            <div class="panel-heading">
                @if(Session::has('message'))
                    <h3 class="panel-title">* {{Session::get('message')}}</h3>
                @else
                    <h3 class="panel-title">* Vui lòng đăng nhập</h3>
                @endif

            </div>
            <div class="panel-body">
                <form action="{{route('postLoginAdmin')}}" method="POST">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" placeholder="E-mail" name="email" type="email"  value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Password" name="password" type="password"  value="{{old('password')}}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

