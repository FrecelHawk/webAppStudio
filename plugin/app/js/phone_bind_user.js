/**
 * Created by pc on 2016/3/17.
 */

var $table = $('#table'), $remove = $("#remove"),$switch = $("#switch"),$bindPhone_modal = $("#bindPhone"),$deleteBind = $('#deleteBindPhone'), selections = [];

function initTable() {

    $table.on('check.bs.table uncheck.bs.table ' +
        'check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        if(!$table.bootstrapTable('getSelections').length){
            $switch.bootstrapSwitch('Disabled');
        }else{
            $switch.prop('disabled',true);
        }
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

function operateFormatter(value, row, index) {
    return [
        '<a class="bind" href="javascript:void(0)" style="margin-left: 10px; margin-right: 10px;" title="是否同意">',
        '<i class="glyphicon glyphicon-minus-sign"></i>',
        '</a>',
        '<a class="remove" href="javascript:void(0)" style="margin-left: 10px; margin-right: 10px;" title="删除">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>'
    ].join('');
}


function handerState(value,row,index){
    var processed = ['<div style="color: #009688">'+value+'</div>'].join('');
    var untreated = ['<div style="color: #D68E8E">'+value+'</div>'].join('');
    if(value==="未处理")
        return untreated;
    else return processed;
}




function detailFormatter(index,row){
    var html = [];
    var title = {
        'mobileaccount': '手机帐户',
        'requesttime': '请求时间',
        'requestdescription': '请求说明',
        'result': '处理结果',
        'state':'处理状态'
    };
    $.each(row,function(key,value){
        var tmp = key;
        if(key==='0') return;
        if(key==='mobileaccount')tmp = title.mobileaccount;
        if(key==='requesttime')tmp = title.requesttime;
        if(key==='requestdescription') tmp = title.requestdescription;
        if(key==='result') tmp = title.result;
        if(key==='state') tmp = title.state;

        html.push('<p><b>'+tmp+':</b>'+value+'</p>');
    });

    return html.join('');
}


window.testEvents = {
    'click':function(e,value,row,index){
        alert("更新");
    }
};

var tmpRow;
window.operateEvents = {
    'click .remove': function (e, value, row, index) {
        tmpRow = row;
        $deleteBind.modal('show');
    },
    'click .bind':function(e,valule,row,index){
        $bindPhone_modal.modal('show');
    }
};

//拒绝
$('#reject').on('click',function(){

    $bindPhone_modal.modal('hide');
});

//同意
$('#accept').on('click',function(){

    $bindPhone_modal.modal('hide');
});


//确认
$('#confirm').on('click',function(){
    $table.bootstrapTable('remove',{
        field:'id',
        values:[tmpRow.id]
    });
    $deleteBind.modal('hide');
});

