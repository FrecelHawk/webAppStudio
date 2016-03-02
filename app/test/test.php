<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="../table_adduction.php">
<!--    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-switch-3/css/bootstrap-switch.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-switch-3/css/highlight.css"/>

    <script src="../plugin/jquery-2.1.1/jquery.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-3.3.5/js/bootstrap.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-switch-3/js/highlight.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-switch-3/js/bootstrap-switch.js"  type="text/javascript"></script>-->
</head>
<div  class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                    你最喜欢哪一种宠物？
                    <p>
                        <input type=radio name=favorite value="狗">狗
                        <input type=radio checked name=favorite value="猫">猫
                        <input type=radio name=favorite value="鸟">鸟
                        <input type=radio name=favorite value="鱼">鱼
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- addition dialog-->
<div id="modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加服务人员</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" name="name" placeholder="姓名">
                </div>
                <div class="form-group">
                    <label style="margin-right: 10px;">性别</label>
                    <form>
                        <input type="radio" name="gender">男
                        <input type="radio" name="gender">女
                    </form>
                </div>
                <div class="form-group">
                    <label>家庭住址</label>
                    <input select-address ng-model="homeCtrl" name = "homeaddress" placeholder="家庭住址" type="text"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label>办公地址</label>
                    <input select-address  ng-model="workCtrl" name = "officeaddress" placeholder="办公地址" type="text"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label>身份证号码</label>
                    <input type="text" class="form-control" name="identitycard" placeholder="身份证号码">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="confirm" type="button" class="btn btn-primary submit">确定</button>
            </div>
        </div>
    </div>
</div>

</html>


<script>
    $('#modal').modal('show');

</script>