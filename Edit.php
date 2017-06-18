<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/18
 * Time: 17:31
 */
include "DbCon.php";

$stu = null;
foreach ($rows as $row){
    if ($row[0] == $_GET['id']){
        $stu = $row;
    }
}
//echo $_GET['id'];

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $stu[1]?>信息修改</title>

</head>

<body>
<h3>修改学生信息</h3>

<form action="DbCon.php?action=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $stu['0'];?>">
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" value="<?php echo $stu['1'];?>"></td>
        </tr>

        <tr>
            <td>性别</td>
            <td>
                <input type="radio" name="sex" value="男" <?php echo ($stu['2'] == "男")? "checked":"";?> >男
            </td>
            <td>
                <input type="radio" name="sex" value="女" <?php echo ($stu['2'] == "女")? "checked":"";?> >女
            </td>
        </tr>
        <tr>
            <td>出生年月日</td>
            <td><input type="date" name="birthday" value="<?php echo $stu['3'];?>"></td>
        </tr>
        <tr>
            <td>专业</td>
            <td><input type="text" name="major" value="<?php echo $stu['4']?>"></td>
        </tr>
        <tr>
            <td> </td>
            <td><input type="submit" value="更新"></td>
            <td><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>
</body>
