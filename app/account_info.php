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
                <button id="confirm" type="button" class="btn btn-primary submit">添加账号</button>
            </div>
        </div>
    </div>
</div>

<div id="update_account" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">账号修改</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-group">
                        <label>账号</label>
                        <input type="text" class="form-control" name="account" placeholder="账号">
                    </div>
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
                <button id="confirm" type="button" class="btn btn-primary submit">修改</button>
            </div>
        </div>
    </div>
</div>



<!-- detail account-->
<form class="form-horizontal">

    <div id="toolbar" style="margin-top: 20px;margin-bottom: 20px;">
        <button id="addition" class="btn btn-primary">
            <i class="glyphicon glyphicon-plus" ></i> 创建账号
        </button>

        <button id="update" class="btn btn-primary" >
            <i class="glyphicon glyphicon-plus"></i> 更改账号
        </button>

        <button id="update_pwd" class="btn btn-primary" >
            <i class="glyphicon glyphicon-plus"></i> 更改密码
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



<!-- update password -->
<div id="update_password" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">密码修改</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-group">
                        <label>旧密码</label>
                        <input type="text" class="form-control" name="oldPwd" placeholder="旧密码">
                    </div>
                </div>
                <div class="form-group">
                    <label>新密码</label>
                    <input type="text" class="form-control" name="newPwd" placeholder="新密码">
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="text" class="form-control" name="password2" placeholder="确认密码">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="confirm" type="button" class="btn btn-primary submit">确定</button>
            </div>
        </div>
    </div>
</div>

<script src="../plugin/address-plugin/selectAddress_notAddress.js" type="text/javascript"></script>
<script>
    (function(){
        var create_account_module,update_account_module,$create_account = $('#create_account'),$update_account=$('#update_account'),$update_pwd =$('#update_password') ;


        var account={account:"xxx",password:"12345",password2:"12345",neighborhoodName:"小区名称",address:"深圳"};


        create_account_module = angular.module('create_account_module', ['selectAddress']);
        update_account_module = angular.module('update_account_module',['selectAddress']);


        angular.bootstrap($('#create_account'), ['create_account_module']);
        angular.bootstrap($('#update_account'),['update_account_module']);


        $('#addition').on('click',function(){
            $create_account.modal('show');
        });

        $('#update_pwd').on('click',function(){
            $update_pwd.modal('show');
        });


        $('#update').on('click',function(){
            for (var name in account) {
                $update_account.find('input[name="' + name + '"]').val(account[name]);
            }

            $update_account.modal('show');
        });

        $create_account.find('.submit').on('click',function(){
            $create_account.modal('hide');
        });

        $update_account.find('.submit').on('click',function(){
            $update_account.modal('hide');
        });


        $update_pwd.find('.submit').on('click',function(){
            var row ={};
            $update_pwd.find('input[name]').each(function () {
                row[$(this).attr('name')] = $(this).val();
            });
            console.log(row);
            $update_pwd.modal('hide');
        });


    });
</script>