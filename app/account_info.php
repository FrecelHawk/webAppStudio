<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="table_adduction.html">
</head>
<body>

<!--  create account-->
<div id="create_account" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">创建账号</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-group">
                        <label>账号</label>
                        <input type="text" class="form-control" name="account" placeholder="账号">
                    </div>
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="text" class="form-control" name="password" placeholder="密码">
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="text" class="form-control" name="password2" placeholder="确认密码">
                </div>
                <div class="form-group">
                    <label>小区名称</label>
                    <input type="text" class="form-control" name="neighborhoodName" placeholder="小区名称">
                </div>
                <div class="form-group">
                    <label>办公地址</label>
                    <input select-address p="p" c="c" a="a" d="d" ng-model="xxx" name = "address" placeholder="办公地址" type="text"
                           class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="confirm" type="button" class="btn btn-primary submit">确定</button>
            </div>
        </div>
    </div>
</div>


<form class="form-horizontal">

    <div id="toolbar" style="margin-top: 20px;">
        <button id="addition" class="btn btn-primary" >
            <i class="glyphicon glyphicon-plus"></i> 创建账号
        </button>

        <button id="update" class="btn btn-primary" >
            <i class="glyphicon glyphicon-plus"></i> 更改账号
        </button>
    </div>

    <div class="form-group">
        <!-- Text input-->
        <label class="col-sm-2 control-label"  >账号</label>
        <div class="col-sm-3">
            <input type="text" placeholder="账号" class="form-control " value="XXXX" disabled>
        </div>
    </div>

    <div class="form-group">
        <!-- Text input-->
        <label class="col-sm-2 control-label" >密码</label>
        <div class="col-sm-3">
            <input type="text" placeholder="密码" class="form-control"  value="123456" disabled>
        </div>
    </div>
    <div class="form-group">

        <!-- Text input-->
        <label class="col-sm-2 control-label" >地址</label>
        <div class="col-sm-3">
            <input type="text" placeholder="地址" class="form-control" value="深圳市" disabled>
        </div>
    </div>



</form>
<script>
     var $create_account = $('#create_account');

     var account={account:"xxx",password:"12345",password2:"12345",neighborhoodName:"小区名称",address:"深圳"};

    $('#addition').on('click',function(){
          $create_account.find('.modal-title').text('创建账号');
        $('#confirm').text('创建账号');
          $create_account.modal('show');
    });


    $('#update').on('click',function(){
        $create_account.find('.modal-title').text('更改账号信息');
        $('#confirm').text('更新账号');
        for (var name in account) {
            $create_account.find('input[name="' + name + '"]').val(account[name]);
        }

        $create_account.modal('show');
    });

    $create_account.find('.submit').on('click',function(){
        var title = $create_account.find('.modal-title').text();
        if(title==='创建账号'){
            console.log('创建账号')
        }

        if(title==='更改账号信息'){
            console.log('更改');
        }
        $create_account.modal('hide');
    });
</script>
<script src="../plugin/address-plugin/selectAddress2.js" type="text/javascript"></script>
<script src="../plugin/address-plugin/index.js" type="text/javascript"></script>
</body>
</html>