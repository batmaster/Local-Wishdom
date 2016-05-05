<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/sticky-footer.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('/') }}">หน้าหลัก</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li {{ (Request::path() == 'admin' ? 'class=active' : '') }}><a href="{{ URL::to('/admin') }}">ผู้ดูแลระบบ</a></li>
                    <li {{ (Request::path() == 'member' ? 'class=active' : '') }}><a href="{{ URL::to('/member') }}">สมาชิก</a></li>
                    <li {{ (Request::path() == 'wisdom' ? 'class=active' : '') }}><a href="{{ URL::to('/wisdom') }}">ข้อมูลภูมิปัญญาชาวบ้าน</a></li>
                    <li {{ (Request::path() == 'philosopher' ? 'class=active' : '') }}><a href="{{ URL::to('/philosopher') }}">ข้อมูลผู้เชี่ยวชาญปราชญ์ชาวบ้าน</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">รายงาน <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">ออกจากระบบ</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                @yield('menu')
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @yield('content')
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">ข้อมูลติดต่อสอบถาม</p>
        </div>
    </footer>

</body>
</html>
