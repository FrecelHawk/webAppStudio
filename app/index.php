<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap.css">
    <link rel="stylesheet" href="../plugin/bootstrap-login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../plugin/bootstrap-login/css/form-elements.css">
    <link rel="stylesheet" href="../plugin/bootstrap-login/css/style.css">
    <link rel="stylesheet" href="../plugin/app/css/theme.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->


</head>

<body>

<?php
require "header.php";
php?>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div id="login_layout" class="col-sm-5" style="display: block;">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>登录网关服务器</h3>
                                <p>请输入用户名和密码登录:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="form-username" placeholder="账号"
                                           class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="密码"
                                           class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">登录</button>
                            </form>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>

</div>

<?php
    require "footer.php";
php?>


</body>
<!-- Javascript -->
<script src="../plugin/jquery-2.1.1/jquery.js"></script>
<script src="../plugin/bootstrap-3.3.5/js/bootstrap.js"></script>
<script src="../plugin/bootstrap-login/js/jquery.backstretch.min.js"></script>
<script src="../plugin/bootstrap-login/js/scripts.js"></script>
<script src="../plugin/angularjs/js/angular.js"></script>
<script src="../plugin/address-plugin/selectAddress.js" ></script>
<script src="../plugin/address-plugin/index.js" ></script>


<script src="../plugin/app/js/index.js"></script>
<!--[if lt IE 10]>
<script src="../plugin/bootstrap-login/js/placeholder.js"></script>
<![endif]-->


</html>