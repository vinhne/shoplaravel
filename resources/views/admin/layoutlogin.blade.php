<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login - FLATY Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="{{asset('css/flaty.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaty-responsive.css')}}">
    <!--basic scripts-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="view/flatty/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
    <script src="view/flatty/assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body class="login-page">

<!-- BEGIN Main Content -->
<div class="login-wrapper">

    @yield('content')

</div>
<!-- END Main Content -->





</body>
</html>
