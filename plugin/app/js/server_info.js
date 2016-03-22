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