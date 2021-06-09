<?php
    if($_POST){
    include '../../quan.php';       //连接数据库
    $name =$_POST['name'];          //获取表单的值
    $pass =$_POST['pass'];
    $password =$_POST['password'];
    $year =$_POST['year'];
    $sex =$_POST['sex'];
    $email =$_POST['email'];
    $phond =$_POST['phond'];
    // echo $sex;die;
    if($name==""){
        echo "姓名不能为空";
        header('refresh:2;url=from.php');
        die;
    }
    if($pass==""){
        echo "密码不能为空";
        header('refresh:2;url=from.php');
        die;
    }
    if($password==""){
        echo "确认密码不能为空";
        header('refresh:2;url=from.php');
        die;
    }
    if($pass!=$password){
        echo "请输入相同密码";
        header('refresh:2;url=from.php');
        die;
    }
    if($year==""){
        echo "年龄不能为空";
        header('refresh:2;url=from.php');
        die;
    }
    if($email==""){
        echo "邮箱不能为空";
        header('refresh:2;url=from.php');
        die;
    }
    if($phond==""){
        echo "电话号不能为空";
        header('refresh:2;url=from.php');
        die;
    }
    $sql="insert into from1 (`name`,`pass`,`password`,`year`,`sex`,`email`,`phond`)
    values('{$name}','{$pass}','{$password}','{$year}','{$sex}','{$email}','{$phond}')";     //把数据写活   把表单内容添加到数据库中
    $stmt =mysqli_prepare($link,$sql);      //准备阶段
    $red =mysqli_stmt_execute($stmt);       //执行阶段
    if($red){                               //判断是否添加成功
        echo "添加成功";
        header('refresh:2;url=info.php');
    }else{
        echo "添加失败";
    }
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="from.php" method="post">
        员工姓名<input type="text" name="name"><br>
        密码<input type="password" name="pass"><br>
        确定密码<input type="password" name="password"><br>
        年龄<select name="year">
            <option>18</option>
            <option>19</option>
        </select><br>
        性别<input type="radio" name="sex" checked value="男">男
        <input type="radio" name="sex" value="女">女<br>
        邮箱<input type="email" name="email"><br>
        电话号码<input type="phont" name="phond"><br>
        <input type="submit" value="添加">
    </form>
</body>
</html>