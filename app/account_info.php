<!--  create account-->
<div id="create_account" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
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
                    <form role="form row" id="create_address">
                        <div class="col-md-4">
                            <select class="form-control prov" name="province">
                                <option>--请选择省份--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control city" name="city">
                                <option>--请选择城市--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control area" name="area">
                                <option>--请选择地区--</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 20px">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="confirm" type="button" class="btn btn-green submit">添加账号</button>
            </div>
        </div>
    </div>
</div>

<div id="update_account" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
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
                    <form role="form row" id="udpate_address">
                        <div class="col-md-4">
                            <select class="form-control prov">
                                <option>--请选择省份--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control city">
                                <option>--请选择城市--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="form-control area">
                                <option>--请选择地区--</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 20px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="confirm" type="button" class="btn btn-green submit">修改</button>
            </div>
        </div>
    </div>
</div>


<!-- detail account-->
<form class="form-horizontal">

    <div id="toolbar" style="margin-top: 20px;margin-bottom: 20px;">
        <button id="addition" class="btn btn-green">
            <i class="glyphicon glyphicon-plus"></i> 创建账号
        </button>

        <button id="update" class="btn btn-green">
            <i class="glyphicon glyphicon-edit"></i> 更改账号
        </button>

        <button id="update_pwd" class="btn btn-green">
            <i class="glyphicon glyphicon-edit"></i> 更改密码
        </button>
    </div>

    <div class="form-group">
        <!-- Text input-->
        <label class="col-sm-2 control-label">账号</label>
        <div class="col-sm-3">
            <input type="text" placeholder="账号" class="form-control " value="XXXX" disabled>
        </div>
    </div>

    <div class="form-group">
        <!-- Text input-->
        <label class="col-sm-2 control-label">密码</label>
        <div class="col-sm-3">
            <input type="text" placeholder="密码" class="form-control" value="123456" disabled>
        </div>
    </div>
    <div class="form-group">

        <!-- Text input-->
        <label class="col-sm-2 control-label">地址</label>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
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
                <button id="confirm" type="button" class="btn btn-green submit">确定</button>
            </div>
        </div>
    </div>
</div>

<script src="../plugin/address-plugin/jquery.cityselect.js" type="text/javascript"></script>
<script src="../plugin/app/js/account_info.js"></script>