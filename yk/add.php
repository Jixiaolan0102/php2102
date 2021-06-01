<?php
    echo "<pre>";print_r($_POST);echo"</pre>";
    $name=trim($_POST['name']);
    $mobile=trim($_POST['mobile']);
    $zhu=trim($_POST['zhu']);

    $mysql="127.0.0.1"; //数据库
    $uname="root";
    $upass="root";
    $shu="php2102";

    $link=new mysqli($mysql,$uname,$upass,$shu);
    $sql="insert into adda (`name`,`mobile`,`zhu`)
    values('{$name}','{$mobile}','{$zhu}')";
    // echo "$sql";
    $stmt=mysqli_prepare($link,$sql);
    mysqli_stmt_execute($stmt);
    $sql = "select * from adda";
    $result = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo"<pre>";print_r($rows);echo"</pre>";
?>
    <table border="1">
        <thead>
            <tr>
                <th>姓名</th>
                <th>年龄</th>
                <th>住址</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($rows as $k=>$v){
                    echo "<tr>";
                    echo "<td>{$v['name']}</td>";
                    echo "<td>{$v['mobile']}</td>";
                    echo "<td>{$v['zhu']}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

