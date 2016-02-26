<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="table_adduction.html">
</head>
<body>
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
            <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>
<script>

    var $table = $('#table'),$remove = $("#remove"),selections=[];
    function initTable(){

        $table.on('check.bs.table uncheck.bs.table ' +
                'check-all.bs.table uncheck-all.bs.table', function () {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);

            // save your data, here just save the current page
            selections = getIdSelections();
            // push or splice the selections if you want to save all data selections
        });


        $remove.click(function () {
            var ids = getIdSelections();
            $table.bootstrapTable('remove', {
                field: 'id',
                values: ids
            });
            $remove.prop('disabled', true);
        });

    }

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        });
    }

    function  operateFormatter(value,row,index){
        return [
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }
    function detailFormatter(index,row){
        var html = [];
        var title = {
            'deviceid': '设备ID',
            'model': '设备类号',
            'name': '设备名称',
            'ip': '设备IP',
            'user': '账号',
            'password': '密码',
        };
        $.each(row,function(key,value){
            var tmp = key;
            if(key==='0') return;
            if(key==='deviceid')tmp = title.deviceid;
            if(key==='model')tmp = title.model;
            if(key==='name') tmp = title.name;
            if(key==='ip') tmp = title.ip;
            if(key==='user') tmp = title.user;
            if(key==='password') tmp = title.password;

            html.push('<p><b>'+tmp+':</b>'+value+'</p>');
        });

        return html.join('');
    }


    window.operateEvents = {
        'click .remove':function(e,value,row,index){
            $table.bootstrapTable('remove',{
                field:'id',
                values:[row.id]
            });
        }
    };
</script>
<script src="../plugin/app/js/table-load.js"></script>
</body>
</html>