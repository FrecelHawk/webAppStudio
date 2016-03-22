<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="import" href="../table_adduction.php">
    <link rel="stylesheet" href="../../plugin/app/css/navigation.css">

    <style>
        .realtime_container{
            margin: 10px;
            padding: 10px;;
        }

        .realtime_btn {
            margin-left: 10px;;
        }
    </style>


</head>

    <div id="test" class="container">
    </div>
</html>
<script>

    var data = [{'id':'1','address':'192.168.1.1'},{'id':'2','address':'192.168.1.2'},{'id':'3','address':'192.168.1.3'},
        {'id': '4', 'address': '192.168.1.4'}, {'id': '5', 'address': '192.168.1.5'}, {
            'id': '6',
            'address': '192.168.1.6'
        }, {'id': '7', 'address': '192.168.1.7'}, {'id': '5', 'address': '192.168.1.5'}, {
            'id': '6',
            'address': '192.168.1.6'
        }, {'id': '7', 'address': '192.168.1.7'},
        {'id':'5','address':'192.168.1.5'},{'id':'6','address':'192.168.1.6'},{'id':'7','address':'192.168.1.7'}];

    function init(){
        var realtime_container =$( '<div class="realtime_container"></div>');
        for(var i=0;i<data.length;i++){
            if((i%5)==0){
                realtime_container = $( '<div class="realtime_container"></div>');
                $('#test').append(realtime_container);
            }
            realtime_container.append('<button class="btn primary realtime_btn">'+data[i].address+'</button>');
        }
        $('#test').append(realtime_container);
    }
    init();
</script>