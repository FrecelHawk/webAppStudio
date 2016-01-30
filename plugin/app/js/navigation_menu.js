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
        var title  = $(this).children("a").text();
        var content= "content";
        set_panel(title,content);
    });
}

function set_panel(title,content){
    $('#panel .panel-title').text(title);
/*
    $('#panel .panel-body').text(content);
*/
}

menu();