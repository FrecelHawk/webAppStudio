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

        <button id="addition" class="btn btn-primary" >
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
            'servicetypeid': '服务类型',
            'servicecontent': '服务内容',
            'servicemanid': '服务人员',
            'serviceevaluate': '服务评价',
            'opendoortime': '开门时间'
        };
        $.each(row,function(key,value){
            var tmp = key;
            if(key==='0') return;
            if(key==='servicetypeid')tmp = title.servicetypeid;
            if(key==='servicecontent')tmp = title.servicecontent;
            if(key==='servicemanid') tmp = title.servicemanid;
            if(key==='serviceevaluate') tmp = title.serviceevaluate;
            if(key==='opendoortime') tmp = title.opendoortime;

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