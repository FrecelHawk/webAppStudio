/**
 * Created by pc on 2016/1/18.
 */





/**
 *  右菜单栏 点击事件
 * */
function menu(){
    $("#meun li.dropdown").hover(
        function () {
            $(this).addClass('active');
            $(this).find('.nav-line').show();
            $(this).addClass('dropdown open active');
        },
        function () {
            $('#meun li.dropdown').removeClass('active');
            $('div.nav-line').hide();
            $('#meun li.dropdown').removeClass('dropdown open active');
        }
    );


}



function init(){
    $('div.nav-line').css({'background':'#009688','width':'104px','height':'2px'}).hide();
}

function set_panel(title){
    $('#panel .panel-title').text(title.trim());
}

var panel = $('#panel .panel-body');

$('#sendMessage').on('click',function(){
    panel.load('publishMessage.php');
    set_panel('发布信息')
});


$('#warningMessage').on('click',function(){
    panel.load('warningMessage.php');
    set_panel('警报信息');
});

$('#devices').on('click',function(){
    panel.load('devices.php');
    set_panel('设备配置')
});


$('#phone_bind_info').on('click',function(){
    panel.load('phone_bind_user.php');
    set_panel('手机绑定信息');
});

$('#server_info').on('click',function(){
    panel.load('server_info.php');
    set_panel('服务信息');
});

$('#server_personnel').on('click',function(){
    panel.load('server_personnel.php');
    set_panel('服务人员')
});

$('#access_record').on('click',function(){
    panel.load('access_record.php');
    set_panel('门禁记录');
});


$('#monitor').on('click',function(){
    panel.load('monitor.php');
    set_panel('摄像头配置')
});

$('#server_type').on('click',function(){
    panel.load('server_type.php');
    set_panel('服务类型');
});

$('#access_card').on('click',function(){
    panel.load('access_card.php');
    set_panel('门禁卡信息');
});


$('#account_info').on('click',function(){
    panel.load('account_info.php');
    set_panel('账户信息')
});

$('#realtime_monitor').on('click',function(){
    panel.load('realtime_monitor.php');
    set_panel('实时监控');
});
    panel.load('publishMessage.php');
    set_panel('发布信息');
init();
menu();

