<header>
    <div class="container-fluid">
        <div class="pull-left">
            <div id="logo"><a href="{{route('dashboard')}}">Fashion Style NDT</a></div>
        </div>
        <div class="pull-right">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('index')}}" target="_blank">
                        <sapn class="fa fa-home"></sapn> View Shop
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <b>Xin chào: </b>Admin <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.show', Auth::user()->id)}}"><span class="fa fa-user"></span> Thông tin tài khoản</a></li>
                        <li><a href="{{route('getChangePass')}}"><span class="fa fa-lock"></span> Thay đổi mật khẩu</a></li>
                        <li><a href="{{route('logout')}}"><span class="fa fa-power-off"></span> Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--End Header-->