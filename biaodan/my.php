<?php
    session_start();
    include 'quan.php';
    $sql = "select * from login_history";
    //准备
    $stmt = mysqli_query($link,$sql);
    //执行
    $rows = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
    // echo '<pre>';print_r($rows);echo '</pre>';

    if($_SESSION['name']){
        $username = $_SESSION['name'];
        echo "你好 {$username}滚回来！";
    }else{
        echo "请先登录";
    }
    echo'<a href="tui.php">退出登录</a>';
    
?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>登录时间</th>
            <th>登录ip</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($rows as $k=>$v){
                $aw =date("Y-m-d H:i:s",$v['login_time']);
                echo "<tr>";
                    echo "<td>{$v['id']}</td>";
                    echo "<td>{$aw}</td>";
                    echo "<td>{$v['login_ip']}</td>";
                    echo "<td><a href='delete.php?id={$v['id']}'>删除</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  
</table>