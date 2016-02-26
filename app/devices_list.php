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

        <button id="upgrade" class="btn btn-primary" disabled>
            <i class="glyphicon glyphicon-refresh"></i> 升级
        </button>

        <button id="reboot" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-plus"></i> 重启
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/devices_list.json"
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
            <th data-field="devicetype"  >设备类型</th>
            <th data-field="serverip">服务器IP</th>
            <th data-field="pnetworkip">公网IP</th>
            <th data-field="gatewayip">网关IP</th>
            <th data-field="ip" >IP</th>
            <th data-field="netmask">掩码</th>
            <th data-field="onlinestate">在线状态</th>
            <th data-field="safetystate">安防状态</th>
            <th data-field="lockstate">锁状态</th>
            <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">操作
        </tr>
        </thead>
    </table>
</div>
<script>
    var $table = $('#table'),$remove = $("#remove"),$upgrade = $("#upgrade"),$reboot = $("#reboot"),selections=[];

    function initTable(){

        $table.on('check.bs.table uncheck.bs.table ' +
                'check-all.bs.table uncheck-all.bs.table', function () {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
            $upgrade.prop('disabled',!$table.bootstrapTable('getSelections').length);
            $reboot.prop('disabled',!$table.bootstrapTable('getSelections').length);
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

        $upgrade.click(function(){
            var ids = getIdSelections();
            alert("批量更新");
            $upgrade.prop('disabled',true);
        });

        $reboot.click(function(){
            var ids = getIdSelections();
            alert("批量重启");
            $reboot.prop('disabled',true);
        });



    }

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        });
    }

    function  operateFormatter(value,row,index){
        return [
            '<a class="remove" href="javascript:void(0)"  style="margin-left: 10px;" title="删除">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>',
            '<a class="upgrade" href="javascript:void(0)" style="margin-left: 10px;" title="更新">',
            '<i class=" glyphicon glyphicon-refresh"></i>',
            '</a>',
            '<a class="reboot" href="javascript:void(0)" style="margin-left: 10px;" title="重启">',
            '<i class="glyphicon glyphicon-plus"></i>',
            '</a>'
        ].join('');
    }

    function detailFormatter(index, row) {
        var html = [];
        var title = {
            'devicetype': '设备类型',
            'serverip': '服务器IP',
            'pnetworkip': '公网IP',
            'ip': 'IP',
            'gatewayip': '网关IP',
            'netmask': '掩码',
            'dns1': 'DNS1',
            'dns2': 'DNS2',
            'sip': 'SIP',
            'onlinestate': '在线状态',
            'safetystate': '安防状态',
            'lockstate': '锁状态'
        };
        $.each(row, function (key, value) {
            var tmp = key;
            if (key === '0') return;
            if (key === 'devicetype')
                tmp = title.devicetype;
            if (key === 'serverip')
                tmp = title.serverip;
            if (key === 'ip') tmp = title.ip;
            if (key === 'gatewayip') tmp = title.gatewayip;
            if (key === 'netmask') tmp = title.netmask;
            if (key ==='dns1') tmp = title.dns1;
            if (key  ==='dns2') tmp = title.dns2;
            if (key==='sip') tmp = title.sip;
            if (key==='onlinestate') tmp = title.onlinestate;
            if (key==='safetystate') tmp = title.safetystate;
            if (key==='lockstate') tmp = title.lockstate;
            html.push('<p><b>' + tmp + ':</b>' + value + '</p>');
        });
        return html.join('');

    }

    window.operateEvents = {
        'click .remove':function(e,value,row,index){
            $table.bootstrapTable('remove',{
                field:'id',
                values:[row.id]
            });
        }, 'click .upgrade':function(e,value,row,index){
            alert("升级");
        }, 'click .reboot':function(e,value,row,index){
            alert("重启");
        }

    };
</script>
<script src="../plugin/app/js/table-load.js"></script>
</body>
</html>