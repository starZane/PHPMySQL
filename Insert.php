<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/18
 * Time: 20:50
 */
include "DbCon.php";

$stuid = 2016102501;
foreach ($rows as $row){
    if ($row[0] == $stuid){
        $stuid++;
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>管理</title>

</head>

<body>
    <h3>添加学生信息</h3>
    <form action="DbCon.php?action=add" method="post">
        <input type="hidden" name="id" value="<?php echo $stuid;?>">
        <?php echo $stuid;?>
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="男">男</td>
                <td><input type="radio" name="sex" value="女">女</td>
            </tr>
            <tr>
                <td>出生日期</td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>
                <td>专业</td>
                <td><input type="text" name="major"></td>
            </tr>
            <tr>
                <!--        <td> </td>-->
                <td><a href="Students.php">返回</td>
                <td><input type="submit" value="添加"></td>
                <td><input type="reset" value="重置"></td>
            </tr>
        </table>
    </form>

</body>
</html>