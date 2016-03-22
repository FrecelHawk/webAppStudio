
<div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-show-export="true"
           data-minimum-count-columns="2"
           data-url="../assets/data/phone_bind_user.json"
           data-show-columns="true"
           data-search="true"
           data-detail-formatter="detailFormatter"
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
            <th data-field="mobileaccount" >手机帐户</th>
            <th data-field="requesttime">请求时间</th>
            <th data-field="requestdescription" >请求说明</th>
            <th data-field="result" data-events="testEvents" >处理结果</th>
            <th data-field="state" data-formatter="handerState">处理状态</th>
            <th data-field="operate" data-align="center" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>

<!-- 手机绑定 dialog-->
<div id="bindPhone" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">手机绑定</h4>
            </div>
            <div class="modal-body">
                <p>是否绑定&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="reject">拒绝</button>
                <button type="button" class="btn btn-green" id="accept">同意</button>
            </div>
        </div>
    </div>
</div>

<!-- 删除手机绑定信息-->
<div id="deleteBindPhone" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除手机绑定</h4>
            </div>
            <div class="modal-body">
                <p>是否删除手机绑定信息&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-green" id="confirm">确认</button>
            </div>
        </div>
    </div>
</div>


<script src="../plugin/app/js/phone_bind_user.js"></script>
<script src="../plugin/app/js/table-load.js"></script>