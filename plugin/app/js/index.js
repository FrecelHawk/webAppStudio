/**
 * Created by pc on 2016/3/17.
 */
function showLogin(){
    $("#login_layout").show();
    $("#register_layout").hide();
}

function showRegister(){
    $("#login_layout").hide();
    $("#register_layout").show();
}

$('#login').on('click',function(){
    showLogin();
});

$('#register').on('click',function(){
    showRegister();
});

$('#register_layout button[type="submit"]').on('click',function(){
    alert("注册");
    window.location.href="main.php";
});

$('#login_layout button[type="submit"]').on('click',function(){
    alert("登录");
    window.location.href="main.php";
});