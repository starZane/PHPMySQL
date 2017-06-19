<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/18
 * Time: 17:20
 */
session_start();?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $_SESSION['user'];?>注销中……</title>
</head>
</html>


<?php
session_destroy();

echo "已注销，正在返回登陆界面……";
header("Refresh:3;url=index.html");
?>


