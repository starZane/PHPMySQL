<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/15
 * Time: 16:54
 */
session_start();
include "DbCon.php";
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>学生信息</title>
    <script>
        function dodel(stuid) {
            var res = confirm('确认删除?')

            if(res) {

                window.location='DbCon.php?action=del&id='+stuid;
            }

        }

    </script>
</head>
<body>

<p align="right">
    <?php
    if ($_SESSION['admin'] == 1)
        echo "管理员 ".$_SESSION['user'];
    else
        echo "学生 ".$_SESSION['user'];
    ?>
    <a href="Logout.php"> 注销</a>
</p>
<?php if ($_SESSION['admin'] == 1){?>
    <h3>管理学生信息</h3>
<?php }else{?>
    <h3>浏览学生信息</h3>
<?php }?>
<table width="500" border="0">
    <tr>
        <th>  ID  </th>
        <th>  姓名  </th>
        <th>性别</th>
        <th> 出生日期 </th>
        <th>  专业  </th>
        <?php if ($_SESSION['admin'] == 1){?>
        <th> 操作 </th>
        <?php }?>
    </tr>
<?php
foreach ($rows as $row) {
    echo "<tr>";
    for ($num = 0; $num < 5; $num++) {
        echo "<th>".$row[$num];
//        echo " ".strlen($row[$num])." "; . "&emsp;"
        if ($num == 1&& strlen($row[1])/3 < 3){
            echo "&#8195;";
        }
        echo "</th>";
    }
    if ($_SESSION['admin'] == 1){?>
        <td>
            <a href="Edit.php?id=<?php echo $row['id']?>">   修改</a>
            <a href="javascript:void(0);" onclick="dodel(<?php echo $row['0']?>)">   删除</a>
        </td>

<?php
    }
    echo "</tr>";
}
if ($_SESSION['admin'] == 1){
    ?>
    <button onclick="{location.href='Insert.php'}">添加</button>
<?php }?>


</table>
</body>
</html>
