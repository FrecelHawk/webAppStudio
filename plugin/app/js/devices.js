/**
 * Created by pc on 2016/3/17.
 */
var $panle = $("#content");

//Tab 解发事件
$("#publish_tab li").on('click',function(){
    $('#publish_tab li').removeClass('active');
    $(this).addClass('active');
    var title  = $(this).children("a").text();
    if(title==="设备列表"){
        $panle.load("devices_list.php");
    }

    if(title==="设备配置"){
        $panle.load("devices_config.php");
    }

});

$panle.load("devices_config.php");
