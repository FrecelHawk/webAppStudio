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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->


</head>
<?php
    require "header.php";
php?>

<body>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div id="login_layout" class="col-sm-5" style="display: block;">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our site</h3>
                                <p>Enter username and password to log on:</p>
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

                  <!--  <div class="social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-google-plus"></i> Google Plus
                            </a>
                        </div>
                    </div>-->

                </div>


                <div id="register_layout" style="display: none;" class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">账号</label>
                                    <input type="text" name="form-first-name" placeholder="账号"
                                           class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">密码</label>
                                    <input type="text" name="form-last-name" placeholder="密码"
                                           class="form-last-name form-control" id="form-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">确认密码</label>
                                    <input type="text" name="form-email" placeholder="确认密码"
                                           class="form-email form-control" id="form-email">
                                </div>

                                <div class="form-group">
                                        <input select-address p="p" c="c" a="a" d="d" ng-model="xxx" placeholder="地址" type="text"
                                               class="form-control"/>
                                </div>
                                <button type="submit" class="btn" id="register_btn">注册</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<?php
    require  "footer.php";
php?>


<!-- Javascript -->
<script src="../plugin/jquery-2.1.1/jquery.js"></script>
<script src="../plugin/bootstrap-3.3.5/js/bootstrap.js"></script>
<script src="../plugin/bootstrap-login/js/jquery.backstretch.min.js"></script>
<script src="../plugin/bootstrap-login/js/scripts.js"></script>
<script src="../plugin/angularjs/js/angular.js"></script>
<script src="../plugin/address-plugin/selectAddress.js" type="text/javascript"></script>
<script src="../plugin/address-plugin/index.js" type="text/javascript"></script>

<script>
     function showLogin(){
         $("#login_layout").show();
         $("#register_layout").hide();
     }

     function showRegister(){
          $("#login_layout").hide();
          $("#register_layout").show();
     }

    $('#login').on('click',function(){
          showLogin();
    });

    $('#register').on('click',function(){
        showRegister();
    });

    $('#register_layout button[type="submit"]').on('click',function(){
          alert("注册");
         window.location.href="main.php";
     });

    $('#login_layout button[type="submit"]').on('click',function(){
        alert("登录");
        window.location.href="main.php";
    });
</script>


<!--[if lt IE 10]>
<script src="../plugin/bootstrap-login/js/placeholder.js"></script>
<![endif]-->

</body>

</html>