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
        /*  $table.bootstrapTable('remove', {
         field: 'id',
         values: ids
         });*/
        console.log(id);
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
    var title = {'type':'类型','state':'处理状态','time':'报警时间','cleartime':'消警时间','describe':'描述'};
    $.each(row,function(key,value){
        var tmp = key;
        if(key==='0') return;
        if(key==='type')
            tmp = title.type;
        if(key==='state')
            tmp = title.state;
        if(key==='time') tmp = title.time;
        if(key==='cleartime') tmp = title.cleartime;
        if(key==='describe') tmp = title.describe;

        html.push('<p><b>'+tmp+':</b>'+value+'</p>');
    });

    return html.join('');
}

var row_tmp;
window.operateEvents = {
    'click .remove':function(e,value,row,index){
        /* $table.bootstrapTable('remove',{
         field:'id',
         values:[row.id]
         });*/
        row_tmp =row;
        $("#myModal").modal('show');
    }
};

$("#confirm").on('click',function(){
    $table.bootstrapTable('remove',{
        field:'id',
        values:[row_tmp.id]
    });
    $("#myModal").modal('hide');
});
