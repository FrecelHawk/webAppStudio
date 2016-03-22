<div>
    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/monitor.json"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="true"
           data-pagination="true"
           data-smart-display="true"
           data-show-pagination-switch="false"
           data-height="500">
        <thead>
        <tr>
            <th data-checkbox="true"></th>
            <th data-field="id" data-detail-formatter="idFormatter" data-sortable="true">序列</th>
            <th data-field="deviceid"  >设备ID</th>
            <th data-field="model">设备型号</th>
            <th data-field="name" >设备名称</th>
            <th data-field="ip" >IP</th>
            <th data-field="operate" data-align="center" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>




<!-- update monitor-->
<div id="update_monitor" class="modal fade">
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


<script src="../plugin/app/js/monitor.js"></script>
<script src="../plugin/app/js/table-load.js"></script>