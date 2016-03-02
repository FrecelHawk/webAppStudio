<!doctype html>
<?php

header("Access-Control-Allow-Origin:*");

//处理请求输出数据

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>浏览器定位</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main.css?v=1.0"/>
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=f82b8b726a3c9577edf8f504dfb2bde6"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
    <style type="text/css">
        #panel {
            position: absolute;
            background-color: white;
            max-height: 90%;
            overflow-y: auto;
            top: 10px;
            right: 10px;
            width: 280px;
        }
    </style>
</head>
<body>
<div id="mapContainer"></div>
<div id="panel">
</div>
<script type="text/javascript">
    var map = new AMap.Map("mapContainer", {
        resizeEnable: true
    });
    AMap.service(["AMap.PlaceSearch"], function() {
        var placeSearch = new AMap.PlaceSearch({ //构造地点查询类
            pageSize: 5,
            pageIndex: 1,
            city: "0755", //城市
            map: map//,
            //panel: "panel"
        });
        //关键字查询
        placeSearch.search('西乡大道302号金源商务大厦', function(status, result) {
            console.log(result);
        });
    });
</script>
</body>
</html>