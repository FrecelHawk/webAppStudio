<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="loading.html">
    <title>注册界面</title>
</head>
<body>
<?php include 'header.php'; ?>

<!--style="width: auto;height: auto;display: table;margin-left: auto;margin-right: auto">-->
<form class="form-horizontal">
    <div class="form-group ">
        <label for="inputEmail3" class="col-sm-2 control-label col-sm-offset-2">账号</label>
        <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label col-sm-offset-2">确定密码</label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPassword4" class="col-sm-2 control-label col-sm-offset-2">确定密码</label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label col-sm-offset-2">地址</label>
        <div class="col-sm-4">
            <input select-address p="p" c="c" a="a" d="d" ng-model="xxx" placeholder="请选择所在地" type="text"
                   class="form-control"/>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-10">
            <button id="cancel" type="button" class="btn btn-default btn-default btn-lg col-sm-offset-5">取消</button>
            <button id="register" type="button" class="btn btn-default col-sm-offset-2  btn-primary btn-lg ">
                注册
            </button>
        </div>
    </div>
</form>
<?php include 'footer.php'; ?>
</body>

<script src="../plugin/address-plugin/selectAddress2.js" type="text/javascript"></script>
<script src="../../plugin/address-plugin/index.js" type="text/javascript"></script>

<script>
   $("#cancel").on('click',function(){
       alert('取消');
   });

    $("#register").on('click',function(){
        window.location.href ='../index.php';
    });

</script>

</html>