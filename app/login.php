<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="loading.html">
    <link rel="stylesheet" href="../plugin/app/css/login.css">
</head>
<body>
    <form class="form-horizontal">
        <div class="form-group ">
            <label for="inputEmail3" class="col-sm-2 control-label col-sm-offset-2">账号</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label col-sm-offset-2"> 密码</label>
            <div class="col-sm-4">
                <input type="password" class="form-control col-sm-2" id="inputPassword3" placeholder="Password">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-10">
                <button id="login" type="button" class="btn btn-default btn-default btn-lg col-sm-offset-5">登录</button>
                <button id="register" type="button" class="btn btn-default col-sm-offset-2  btn-primary btn-lg ">
                    注册
                </button>
            </div>
        </div>
    </form>
</body>

<script>
   $("#login").on('click',function(){
         window.location.href = "../app/index.php";
   });


    $("#register").on('click',function(){
        window.location.href = "../app/register.php";
    });

</script>
</html>