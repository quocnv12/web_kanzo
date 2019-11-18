<!DOCTYPE html>
<html>
<head>
    <title>Lấy lại mật khẩu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
        content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="csss/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="csss/css/style.css" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<body>
    <h1>Lấy lại mật khẩu</h1>
    <div class="w3layoutscontaineragileits">
        <form method="post" action="">
            @csrf

            @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
             @endif
            <input type="password" Name="password" placeholder="Nhập mật khẩu mới">
            @if ($errors->has('password_confirmation'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
            @endif
            <input type="password" Name="password_confirmation" placeholder="Nhập lại mật khẩu">
            <div class="aitssendbuttonw3ls">
                <button type="submit">Xác nhận</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="csss/js/jquery-2.1.4.min.js"></script>
    <script src="csss/js/jquery.magnific-popup.js" type="text/javascript"></script>
</body>
</html>
