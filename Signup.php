<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/18
 * Time: 22:25
 */
include "DbCon.php";
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>注册</title>
    <script>
        function sub() {
            var content = document.getElementById("usr").value;

            <?php
            foreach ($urpds as $urpd){
            ?>
            var usr = "<?php echo $urpd[0];?>";
            if (content == usr) {
                alert("用户名已存在！");
                return false;
            }
            //未完成！！！！！

            <?php
            }
            ?>
            var password = document.getElementById("pwd").value;
            var repassword = document.getElementById("repwd").value;
            if (password != repassword) {
                alert("密码不一致！");
                return false;
            }

            if (content == ''|| password == '' || repassword == ''){
                alert("请确认输入信息完整！");
                return false;
            }


        }
    </script>

</head>

<body>
<h3>用户注册</h3>
<form action="DbCon.php?action=reg" method="post" onsubmit="return sub()">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="usr" id="usr"></td>
        </tr>

        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd" id="pwd"></td>
        </tr>
        <tr>
            <td>密码确认</td>
            <td><input type="password" name="repwd" id="repwd"></td>
        </tr>
        <tr>
            <!--        <td> </td>-->
            <td><a href="index.html">返回</td>
            <td><input type="submit" value="添加"></td>
            <td><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>

</body>
</html>