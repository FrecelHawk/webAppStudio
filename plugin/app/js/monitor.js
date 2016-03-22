/**
 * Created by pc on 2016/3/17.
 */



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
        '<a class="remove" href="javascript:void(0)" title="删除">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>',
        '<a class="upgrade" href="javascript:void(0)" style="margin-left: 10px;" title="更新">',
        '<i class="glyphicon glyphicon-cog"></i>',
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
