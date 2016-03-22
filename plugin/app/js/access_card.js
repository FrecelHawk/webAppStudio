/**
 * Created by pc on 2016/3/17.
 */
var $modal = $('#add_access_card');

$('#addition').on('click',function(){
    $modal.modal('show');
});

//确认
$modal.find('.submit').on('click',function(){
    var row = {};
    $modal.find('input[name]').each(function () {
        row[$(this).attr('name')] = $(this).val();
    });
    console.log(row);
    $modal.modal('hide');
});

function detailFormatter(index,row){
    var html = [];
    var title = {
        'cardnumber': '卡号',
        'householderPhone': '住户手机',
        'householderName': '住户姓名',
    };
    $.each(row,function(key,value){
        var tmp = key;
        if(key==='0') return;
        if(key==='cardnumber')tmp = title.cardnumber;
        if(key==='householderPhone')tmp = title.householderPhone;
        if(key==='householderName') tmp = title.householderName;

        html.push('<p><b>'+tmp+':</b>'+value+'</p>');
    });

    return html.join('');
}
