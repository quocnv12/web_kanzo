<!DOCTYPE html>
<html>

<!-- Head -->

<head>

    <title>Existing Login Form a Flat Responsive Widget Template :: W3layouts</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
        content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
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
        <form method="post">
            @csrf
            @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
                <strong style="color:red">{{ $errors->first('email') }}</strong>
            </div>
            @endif
            <input type="text" Name="email" placeholder="EMAIL">
            @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
                <strong style="color:red">{{ $errors->first('password') }}</strong>
            </div>
            @endif
            <input type="password" Name="password" placeholder="PASSWORD">

            <ul class="agileinfotickwthree">
                <li>
                    <input type="checkbox" id="brand1" value="">
                    
                    <label for="brand1"><span></span>Remember me</label>
                    <a href="#">Forgot password?</a>
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
    <!--//pop-up-box-js-file -->
    <script>
        $(document).ready(function () {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });

    </script>

</body>
<!-- //Body -->

</html>
