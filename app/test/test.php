<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="../table_adduction.php">
<!--    <link rel="stylesheet" href="../../plugin/bootstrap-3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../plugin/test/jquery.datetimepicker.css"/>-->
<!--    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-switch-3/css/bootstrap-switch.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-switch-3/css/highlight.css"/>

    <script src="../plugin/jquery-2.1.1/jquery.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-3.3.5/js/bootstrap.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-switch-3/js/highlight.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-switch-3/js/bootstrap-switch.js"  type="text/javascript"></script>-->
<!--    <script src="../../plugin/jquery-2.1.1/jquery.js"  type="text/javascript"></script>
    <script src="../../plugin/bootstrap-3.3.5/js/bootstrap.js"  type="text/javascript"></script>
    <script src="../../plugin/test/jquery.datetimepicker.js" type="text/javascript"></script>-->
</head>
<!--<div class='input-group date' id="datetimepicker"  style="margin-top: 20px">
    <input type='text' class="form-control"  />
    <span class="input-group-addon" >
        <span class="glyphicon glyphicon-calendar"></span>
    </span>
</div>-->

<div class="form-group">
    <label>办公地址</label>
    <input select-address p="p" c="c" a="a" d="d" ng-model="xxx" name = "address" placeholder="办公地址" type="text"
           class="form-control"/>
</div>
<h1>Hello {{ name }}</h1>

<script src="../../plugin/address-plugin/selectAddress_notAddress.js" type="text/javascript"></script>
<script>
    (function() {
        var app;

        app = angular.module('app', ['selectAddress']);

        console.log(document);
        angular.bootstrap($('.form-group'), ['app']);

    }).call(this);

</script>

</html>