<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="loading.html">
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>
</head>
<body>

    <form class="form-horizontal">
<!--            <div id="legend" class="">
                <legend class="">设备配置</legend>
            </div>-->

        <div id="toolbar" style="margin-top: 20px;">
            <button id="devices" class="btn btn-primary" disabled>
                <i class="glyphicon glyphicon-plus" href="#"></i> 添加配置
            </button>

            <span class="btn btn-primary btn-file">
                   <i class="glyphicon glyphicon-folder-open" href="#"></i> 导入配置 <input type="file">
            </span>
        </div>

        <div class="form-group">
                <!-- Text input-->
                <label class="col-sm-2 control-label"  >设备类型</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入设备类型" class="form-control ">
                </div>
            </div>

            <div class="form-group">
                <!-- Text input-->
                <label class="col-sm-2 control-label" >服务器IP</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入服务器IP" class="form-control">
                </div>
            </div>
            <div class="form-group">

                <!-- Text input-->
                <label class="col-sm-2 control-label" >公网IP</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入公网IP" class="form-control">
                </div>
            </div>

            <div class="form-group">

                <!-- Text input-->
                <label class="col-sm-2 control-label" >网关IP</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入网关IP" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <!-- Text input-->
                <label class="col-sm-2 control-label" >IP</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入IP" class="form-control">
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <!-- Text input-->
                <label class="col-sm-2 control-label" >掩码</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入掩码" class="form-control">
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <!-- Text input-->
                <label class="col-sm-2 control-label" >DNS</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入DNS" class="form-control">
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group">
                <!-- Text input-->
                <label class="col-sm-2 control-label" >SIP</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="输入SIP" class="form-control">
                    <p class="help-block"></p>
                </div>
            </div>

    </form>
</body>
</html>