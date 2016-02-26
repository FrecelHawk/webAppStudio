<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>获得服务器更新</h1>
<div id="result"></div>

<script>
    if(typeof(EventSource)!=="undefined")
    {
        var source=new EventSource("server.php");
        source.onmessage=function(event)
        {
            document.getElementById("result").innerHTML+=event.data + "<br />";
        };
    }
    else
    {
        document.getElementById("result").innerHTML="Sorry, your browser does not support server-sent events...";
    }
</script>

</body>
</html>