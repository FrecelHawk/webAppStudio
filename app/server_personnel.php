
<div>
    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>

        <button id="addition" class="btn btn-green" >
            <i class="glyphicon glyphicon-plus"></i> 添加人员
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/server_personnel.json"
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
            <th data-field="name"  >姓名</th>
            <th data-field="gender">性别</th>
            <th data-field="homeaddress" >家庭住址</th>
            <th data-field="officeaddress" >办公地址</th>
            <th data-field="identitycard" >身份证号码</th>
            <th data-field="telephone" >电话号码</th>
            <th data-field="mobile" >手机</th>
            <th data-field="servicetype" >服务类型</th>
            <th data-field="operate" data-align = "center" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>

<!-- addition dialog-->
<div id="create_personnel" class="modal fade">
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
                        <input type="radio" name="gender" value="男">男
                        <input type="radio" name="gender" value="女">女
                    </form>
                </div>
                <div class="form-group">
                    <label>家庭住址</label>
                    <div class="form-group">
                        <input select-address  ng-model="workCtrl" name = "officeaddress" placeholder="街道地址" type="text"
                               class="form-control"/>
                    </div>
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
                <button id="confirm" type="button" class="btn btn-green submit">确定</button>
            </div>
        </div>
    </div>
</div>



<!-- update dialog-->
<div id="update_personnel" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">编辑服务人员</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" name="name" placeholder="姓名">
                </div>
                <div class="form-group">
                    <label style="margin-right: 10px;">性别</label>
                    <form>
                        <input type="radio" name="gender" value="男">男
                        <input type="radio" name="gender" value="女">女
                    </form>
                </div>
                <div class="form-group">
                    <label>家庭住址</label>
                    <div class="form-group">
                        <input select-address  ng-model="workCtrl" name = "officeaddress" placeholder="家庭地址" type="text"
                               class="form-control"/>
                    </div>
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
                <button id="confirm" type="button" class="btn btn-green submit">确定</button>
            </div>
        </div>
    </div>
</div>

<!-- delete dialog -->
<div id="remove_dialog" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">信息提示</h4>
            </div>
            <div class="modal-body">
                <p>是否删除&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-green submit" >确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="../plugin/address-plugin/jquery.cityselect.js" ></script>
<script src="../plugin/app/js/server_personnel.js"></script>
<script src="../plugin/app/js/table-load.js"></script>