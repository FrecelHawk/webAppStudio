/**
 * Created by pc on 2016/3/17.
 */
var $table = $('#table'),$remove = $("#remove"),selections=[];

//Tab 解发事件
$("#publish_tab li").on('click',function(){
    $('#publish_tab li').removeClass('active');
    $(this).addClass('active');
    var title  = $(this).children("a").text();
    /*  alert(title);*/
    if(title === "发布信息") {
        publishMessage_show();
        table_hide();
    }else{
        publishMessage_hide();
        table_show();
    }
});


$("#message-type li").on('click',function(){
    var type = $(this).children('a').text();
    $("#message-type-btn").html(type+'  <span class="caret"></span>');

});


//发布信息
function publishMessage(){

}


function table_show(){
    $("#table-message").show();
}

function table_hide(){
    $("#table-message").hide();
}


function publishMessage_show(){
    $("#publish-message").show();
}


function publishMessage_hide(){
    $("#publish-message").hide();
}



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

function detailFormatter(index,row){
    var html = [];
    var title = {'title':'消息标题','type_content':'信息类型','content':'内容','update_time':'修改时间','send_time':'消息发送有效期'};
    $.each(row,function(key,value){
        var tmp = key;
        if(key==='title')
            tmp = title.title;
        if(key==='type_content')
            tmp = title.type_content;
        if(key==='content') tmp = title.content;
        if(key==='update_time') tmp = title.update_time;
        if(key==='send_time') tmp = title.send_time;

        html.push('<p><b>'+tmp+':</b>'+value+'</p>');
    });

    return html.join('');
}


function  operateFormatter(value,row,index){
    return [
        '<a class="remove" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>'
    ].join('');
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


publishMessage_hide();
table_show();
