<!DOCTYPE html>
<html>

<!-- Head -->

<head>

    <title>Đăng nhập quản trị</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
        content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta-Tags -->

    <link href="csss/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Style -->
    <link rel="stylesheet" href="csss/css/style.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->

<body>

    <h1>Đăng nhập quản trị</h1>

    <div class="w3layoutscontaineragileits">
        <h2>Login here</h2>
        <form method="post" action="">
            @csrf
            @if (session('thongbao'))
            <div class="alert alert-danger" role="alert">
                <strong style="color:red">{{ session('thongbao') }}</strong>
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong style="color:red">{{ session('success') }}</strong>
            </div>
            @endif
            @if ($errors->has('emailreset'))
            <div class="alert alert-danger" role="alert">
                <strong style="color:red">{{ $errors->first('emailreset') }}</strong>
            </div>
            @endif
            @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
                <strong style="color:red">{{ $errors->first('email') }}</strong>
            </div>
            @endif
            <input type="text" Name="email" value="{{ old('email') }}" placeholder="EMAIL">
            @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
                <strong style="color:red">{{ $errors->first('password') }}</strong>
            </div>
            @endif
            <input type="password" Name="password" placeholder="PASSWORD">

            <ul class="agileinfotickwthree">
                <li>
                    {{-- <input type="checkbox" id="brand1" value="">

                    <label for="brand1"><span></span>Remember me</label> --}}
                    <a href="" data-toggle="modal" data-target="#myModal">Forgot password?</a>
                </li>
            </ul>
            <div class="aitssendbuttonw3ls">
                <button type="submit">Login</button>
                {{-- <p> To register new account <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Here</a></p>
				<div class="clear"></div> --}}
            </div>
        </form>

    </div>
    <div class="w3footeragile">
        <p> &copy; 2019 Existing Login Form. All Rights Reserved | Design by <a href="web88.vn"
                target="_blank">Talentwins</a></p>
    </div>


    <script type="text/javascript" src="csss/js/jquery-2.1.4.min.js"></script>

    <!-- pop-up-box-js-file -->
    <script src="csss/js/jquery.magnific-popup.js" type="text/javascript"></script>
 
</body>
</html>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="lay-lai-mat-khau" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 style="" class="modal-title">Quên mật khẩu</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhập email đề lấy lại mật khẩu :</label>
                        <input style="color:green" type="text" class="form-group" name="emailreset">
                        @if ($errors->has('emailreset'))
                        <div class="alert alert-danger" role="alert">
                            <strong style="color:red">{{ $errors->first('emailreset') }}</strong>
                        </div>
                        @endif
                        @if (session('thongbao'))
                        <div class="alert alert-danger" role="alert">
                            <strong style="color:red">{{ session('thongbao') }}</strong>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Tiếp tục</button>
                </div>
            </form>
        </div>
    </div>
</div>
