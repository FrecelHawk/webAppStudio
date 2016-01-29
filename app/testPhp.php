<!DOCTYPE html>
<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Content-type: text/html; charset=UTF8');
$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
?>
<html>
<body>

<?php
echo "我的第一段 PHP 脚本！";
echo  "Hello World";
?>
<p/>

<?php
 $name = $_REQUEST['fname'];
echo  $name;
?>

<?php
  socket_bind()
?>

</body>
</html>