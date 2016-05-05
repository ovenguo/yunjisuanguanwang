<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content>
    <link rel="icon" href="__Public__/bootstrap-3.3.4-dist/css/ie10-viewport-bug-workaround.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="__Public__/bootstrap-3.3.4-dist/css/starter-template.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="__Public__/bootstrap-3.3.4-dist/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .col-center-block{
            float: none;
            display: block;
            margin-left: 33%;
            margin-right: 30%;
        }
    </style>
    <title>云计算后台管理网站用户登录</title>
    <link rel="stylesheet" href="__Public__/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="__Public__/bootstrap-3.3.4-dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row myCenter">
            <div class="col-xs-6 col-md-4 col-center-block">
                <img src="__Public__/picture/cloud.png" alt="" style="margin-left:20%;margin-right:20%;">
                <form action="<?php echo U('Index/Login/login');?>" class="form-signin-heading">
                    <h2 class="fomr-signin-heading">请登录</h2>
                    <label for="username" class="sr-only">用户名</label>
                    <input type="text" id="username" class="form-control" placeholder="用户名" required="autofocus" name="username">
                    <br>
                    <input type="password" id="inputPassword" class="form-control" placeholder="密码" name="password">
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" value="remember-me">记住我
                            </label>
                        </div>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>