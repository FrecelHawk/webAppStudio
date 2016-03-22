/**
 * Created by pc on 2016/3/17.
 */
var $table = $('#table'),$remove = $("#remove"),$server_type = $('#add_server_type'),
    $del_server_type = $('#del_server_type'),$update_server_type = $('#update_server_type'),selections=[];
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
        'servicetype': '服务类型'
    };
    $.each(row,function(key,value){
        var tmp = key;
        if(key==='0') return;
        if(key==='servicetype')tmp = title.servicetype;

        html.push('<p><b>'+tmp+':</b>'+value+'</p>');
    });

    return html.join('');
}


$('#addition').on('click',function(){
    $server_type.modal('show');
});


//添加服务类型
$server_type.find('.submit').on('click',function(){
    var row = {};
    $server_type.find('input[name]').each(function () {
        row[$(this).attr('name')] = $(this).val();
    });
    console.log(row);
    $server_type.modal('hide');
});

var tmpRow;
window.operateEvents = {
    'click .remove':function(e,value,row,index){
        tmpRow = row;
        $del_server_type.modal('show');
    },
    'click .upgrade':function(e,value,row,index){
        tmpRow = row;
        $update_server_type.find('input[name=servicetype]').val(tmpRow.servicetype);
        $update_server_type.modal('show');
    }
};

$del_server_type.find('.confirm').on('click',function(){
    console.log(tmpRow);
    $del_server_type.modal('hide');
    $table.bootstrapTable('remove',{
        field:'id',
        values:[tmpRow.id]
    });
});


$update_server_type.find('.confirm').on('click',function(){
    $update_server_type.modal('hide');
});