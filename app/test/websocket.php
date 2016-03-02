<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="loading.html">
    <title>Title</title>
</head>
<div></div>
<script>
    var alarm_count = 0;
    $(function () {
        var ws = new WebSocket('ws://192.168.1.131:8181?deviceinfo=1');
        ws.onopen = function () {
            /* ws.send('hello');*/
        };
        ws.onmessage = function (evt) {
            var msg = jQuery.parseJSON(evt.data);
            if(msg) alarm_count++;
            console.log(msg);
            $("div").text(alarm_count);
        };
        ws.onclose = function (evt) {
            console.log('WebSocketClosed!');
        };
        ws.onerror = function (evt) {
            console.log('WebSocketError!');
        };
    });
</script>
<body>

</body>
</html>