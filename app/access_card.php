<div>
    <div id="toolbar">
        <button id="addition" class="btn btn-green" >
            <i class="glyphicon glyphicon-plus"></i> 添加门禁卡
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/access_card.json"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="true"
           data-pagination="true"
           data-smart-display="true"
           data-show-pagination-switch="false"
           data-height="500">
        <thead>
        <tr>
            <th data-field="id" data-detail-formatter="idFormatter" data-sortable="true">序列</th>
            <th data-field="cardnumber">卡号</th>
            <th data-field="householderPhone">住户手机</th>
            <th data-field="householderName">户主姓名</th>
        </tr>
        </thead>
    </table>
</div>


<div id="add_access_card" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加门禁卡</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>卡号</label>
                    <input type="text" class="form-control" name="cardnumber" placeholder="卡号">
                </div>
                <div class="form-group">
                    <label>住户手机</label>
                    <input type="text" class="form-control" name="householderPhone" placeholder="住户手机">
                </div>
                <div class="form-group">
                    <label>户主姓名</label>
                    <input type="text" class="form-control" name="householderName" placeholder="户主姓名">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-green submit">添加门禁卡</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="../plugin/app/js/access_card.js"></script>
<script src="../plugin/app/js/table-load.js"></script>