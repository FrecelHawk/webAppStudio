<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="loading.html">
</head>
<body>

<div>
    <div>
        <ul class="nav nav-tabs" id="publish_tab">
            <li role="presentation"><a href="#">设备列表</a></li>
            <li role="presentation" class="active"><a href="#">设备配置</a></li>
        </ul>
    </div>

    <div id="content">

    </div>

</div>

<script>

    var $panle = $("#content");

    //Tab 解发事件
    $("#publish_tab li").on('click',function(){
        $('#publish_tab li').removeClass('active');
        $(this).addClass('active');
        var title  = $(this).children("a").text();
        if(title==="设备列表"){
            $panle.load("devices_list.html");
        }

        if(title==="设备配置"){
           $panle.load("devices_config.html");
        }

    });

    $panle.load("devices_config.html");


</script>
</body>
</html>