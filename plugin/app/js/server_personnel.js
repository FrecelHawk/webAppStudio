/**
 * Created by pc on 2016/3/17.
 */


var $table = $('#table'), $remove = $("#remove"), $addition = $('#addition'),
    $remove_dialog = $('#remove_dialog'),$create_personnel = $('#create_personnel'),
    $update_personnel = $('#update_personnel'),
    tmpRow,selections = [];
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
        'name': '姓名',
        'gender': '性别',
        'homeaddress': '家庭住址',
        'officeaddress': '办公地址',
        'identitycard': '身份证号码',
        'telephone': '固定电话',
        'mobile': '手机',
        'servicetypeid':'关联其他IP',
        'star':'星级',
        'description':'说明'
    };
    $.each(row,function(key,value){
        var tmp = key;
        if(key==='0') return;
        if(key==='name')
            tmp = title.name;
        if(key==='gender')
            tmp = title.gender;
        if(key==='homeaddress') tmp = title.homeaddress;
        if(key==='officeaddress') tmp = title.officeaddress;
        if(key==='identitycard') tmp = title.identitycard;
        if(key==='telephone') tmp = title.telephone;
        if(key==='mobile') tmp = title.mobile;
        if(key==='servicetypeid') tmp = title.mobile;
        if(key==='star') tmp = title.star;
        if(key==='description') tmp = title.description;


        html.push('<p><b>'+tmp+':</b>'+value+'</p>');
    });

    return html.join('');
}


//操作事件
window.operateEvents = {
    'click .remove':function(e,value,row,index){
        tmpRow = row;
        $remove_dialog.modal('show');
    },
    'click .upgrade':function(e,value,row,index){
        showModal($update_personnel,"更新服务人员",row);
    }
};

$('#addition').click(function(){
    showModal($create_personnel,"添加服务人员",null);
});


//删除
$remove_dialog.find('.submit').click(function(){
    $table.bootstrapTable('remove', {
        field: 'id',
        values:[tmpRow.id]
    });
    $remove_dialog.modal('hide');
});


// 提交事件触发
$create_personnel.find('.submit').click(function () {
    var row = {};
    $create_personnel.find('input[name]').each(function () {
        if($(this).attr('name')==='gender'){
            row[$(this).attr('name')] = $('input[type="radio"][name="gender"]:checked').val();
        }else{
            row[$(this).attr('name')] = $(this).val();
        }

    });
    console.log(row);
    $create_personnel.modal('hide');
});

function showModal(obj,title, row) {
    /*        obj.data('id', row.id);*/
    obj.find('.modal-title').text(title);
    for (var name in row) {
        if(name==="gender"){
            $("input[type='radio'][name="+name+"][value="+row[name]+"]").attr({checked:"ture"});
            continue;
        }
        obj.find('input[name="' + name + '"]').val(row[name]);
    }

    if(title==="添加服务人员"){
        $("#create_address").address({nodata:"none",required:false});
    }

    if(title==="更新服务人员") {
        $("#update_address").address({prov: row.province, city: row.city, area: row.area, nodata: "none"});
    }
    obj.modal('show');
}


