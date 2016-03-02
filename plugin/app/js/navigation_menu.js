/**
 * Created by pc on 2016/1/18.
 */

/**
 *  右菜单栏 点击事件
 * */
function menu(){
    $("#meun li").on('click',function(){
        $('#meun li').removeClass('active');
        $(this).addClass('active');
        var a = $(this).children('a');
        var title = a.text().substring(0,a.text().lastIndexOf(" "));
        set_panel(title);
    });
}

function set_panel(title){
    $('#panel .panel-title').text(title.trim());
/*
    $('#panel .panel-body').text(content);
*/
}

var panel = $('#panel .panel-body');

$('#sendMessage').on('click',function(){
    panel.load('publishMessage.php');

});


$('#warningMessage').on('click',function(){
    panel.load('warningMessage.php');
});

$('#devices').on('click',function(){
    panel.load('devices.php');
});


$('#phone_bind_info').on('click',function(){
    panel.load('phone_bind_user.php');
});

$('#server_info').on('click',function(){
    panel.load('server_info.php');
});

$('#server_personnel').on('click',function(){
    panel.load('server_personnel.php');
});

$('#access_record').on('click',function(){
    panel.load('access_record.php');
});


$('#monitor').on('click',function(){
    panel.load('monitor.php');
});

$('#server_type').on('click',function(){
    panel.load('server_type.php');
});

$('#access_card').on('click',function(){
    panel.load('access_card.php');
});


$('#account_info').on('click',function(){
    panel.load('account_info.php');
});
    panel.load('publishMessage.php');
/*panel.load('phone_bind_user.php');*/

menu();

