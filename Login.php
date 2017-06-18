<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/18
 * Time: 16:46
 */
session_start();
include "DbCon.php";

$success = 1;
if (isset($_POST["sub"])){
//    echo "成功<br/>";
    $usr = $_POST['usr'];
    $pwd = $_POST['pwd'];
    foreach ($urpds as $urpd) {
        if ($usr==$urpd[0]&&$pwd==$urpd[1]){
            $success = 1;
            $_SESSION['user'] = $urpd[0];
            $_SESSION['admin'] = $urpd[2];
            header("Location: ./Students.php");
            break;
        }
        else{
            $success = 0;
        }
//    echo $urpd[0],"<br/>",$urpd[1];
    }
//    echo $usr.$pwd;
}

if ($success == 0){
    echo "用户名或密码错误！3秒后返回重新登录……";
    header("Refresh:3;url=index.html");
}