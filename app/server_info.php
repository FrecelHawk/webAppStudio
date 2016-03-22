<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="table_adduction.html">
    <title>小区后台管理</title>
</head>
<body>
<div>
    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>

        <button id="addition" class="btn btn-green" >
            <i class="glyphicon glyphicon-plus"></i> 添加服务类型
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-url="../assets/data/server_info.json"
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
            <th data-field="servicetypeid">服务类型</th>
            <th data-field="servicecontent">服务内容</th>
            <th data-field="servicemanid" >服务人员</th>
            <th data-field="serviceevaluate" data-editable="true">服务评价</th>
            <th data-field="opendoortime" >开门时间</th>
            <th data-field="operate" data-align="center" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>

<script src="../plugin/app/js/server_info.js"></script>
<script src="../plugin/app/js/table-load.js"></script>
</body>
</html>