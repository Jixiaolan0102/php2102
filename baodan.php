<?php
echo"<pre>";print_r($_POST);echo"</pre>";
// 用户名
$user_name=$_POST['u_name'];
$patten="/^[a-zA-Z]{5,10}$/";
if(!preg_match($patten,$user_name)){
    echo"用户名不正确";
}else{
    echo"用户名正确";
}


echo'<br>';
// emali
$user_email=$_POST['u_email'];
$patten='/^[a-zA-Z0-9]{3,16}@[a-zA-Z0-9]{2,10}\.com$/';
if(!preg_match($patten,$user_email)){
    echo"email不正确";
}else{
    echo"email正确";
}

echo'<br>';
// 手机号
$user_cell=$_POST['u_cell'];
$patten='/^[1][356789]\d{9}$/';
if(!preg_match($patten,$user_cell)){
    echo"手机号不正确";
}else{
    echo'手机号正确';
}


echo'<br>';
// 密码
$user_password=$_POST['u_password'];
$patten='/^\w{6,}$/i';
if(!preg_match($patten,$user_password)){
    echo"密码不正确";
}else{
    echo'密码正确';
}


echo'<br>';
$user_password1=$_POST['u_password1'];
if($user_password!=$user_password1){
    echo"密码不一致";
}else{
    echo"密码一致";
}