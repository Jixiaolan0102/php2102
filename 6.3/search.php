<?php
    include '../quan.php';
    $ming = $_GET['ming'];
    $sql = "select * from p_goods where goods_name like '%$ming%'";
    $stmt = mysqli_query($link,$sql);
    $red = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
?>
<ul>
    <?php foreach($red as $k=>$v){ ?>
        <li>
        <a href="goods.php ?id=<?php echo $v['goods_id'] ?>">
        <?php echo $v['goods_name'] ?></a>
        </li>
    <?php } ?> 
    <a href="#">上一页</a>
    <a href="#">下一页</a>
    <a href="search.html">上一步</a>
</ul>