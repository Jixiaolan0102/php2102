<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $slit=[
        'aaaaa',
        'bbbbb',
        'ccccc',
        'ddddd'
    ];
    $sli=[
        'aaaaa',
        'bbbbb',
        'ccccc',
        'ddddd'
    ];
?>
    <ul>
        <?php
            $length=count($slit);
            for($i=0;$i<$length;$i++){
                echo"<li>".$slit[$i]."</li>";
            }
            echo"<br>";
            foreach($sli as $k=>$v){
                echo"<li>".$v."</li>";
            }
        ?>
    </ul>
</body>
</html>