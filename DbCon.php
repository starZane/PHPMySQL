<?php
/**
 * Created by PhpStorm.
 * User: starz
 * Date: 2017/6/14
 * Time: 18:37
 */
try {
    $pdo = new PDO("mysql:host=localhost;dbname=mydb", "root", "0213");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

//$sql = "INSERT INTO test(id) VALUE (12)";
//$pdo->query($sql);
$sql = "SELECT *  FROM users";
//echo $sql . "<br/>";
//$pdo->query('set names utf8;');
$result = $pdo->query($sql);
$urpds = $result->fetchAll();

$sql = "SELECT *  FROM students";

$result = $pdo->query($sql);
$rows = $result->fetchAll();

switch ($_GET['action']){
    case 'del':
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id =".$id;
        $pdo->exec($sql);
        echo "删除id:".$_GET['id'];
        header("Location:Students.php");
    case 'edit':
        $id = $_POST['id'];
        $sql = "UPDATE students SET name='".$_POST['name']."',sex='".$_POST['sex']."',birthday='".$_POST['birthday']
            ."',major='".$_POST['major']."' WHERE id=".$id;
        $pdo->exec($sql);
        echo $sql;
        header("Location:Students.php");
    case 'add':
        $sql = "INSERT INTO students (id,name,sex,birthday,major) VALUES (".$_POST['id'].",'".$_POST['name']."'
        ,'".$_POST['sex']."','".$_POST['birthday']."','".$_POST['major']."')";
        $pdo->exec($sql);
        echo $sql;
        header("Location:Students.php");
    case 'reg':
        if (isset($_POST['admin'])){
            $admin = $_POST['admin'];
        }else{
            $admin = 0;
        }

        $sql = "INSERT INTO users (username, password, admin) VALUES ('".$_POST['usr']."','".$_POST['pwd']."',".$admin.")";
        $pdo->exec($sql);
        echo $_POST['usr']."注册成功!请返回登录……";
        header("Refresh:3;url=index.html");
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>处理中……</title>
</head>
</html>
