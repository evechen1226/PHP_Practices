<?php 
// 資料清洗
$acc=$_POST['acc'];
$pwd=$_POST['pwd'];

$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');

// $sql="select * from users where `acc`='$acc' && `pw`='$pwd'";
$sql="select count(*) form users where `acc` = '$acc' && `pw`='$pwd'";

// -------debug 使用--------
// echo $sql;
// exit();

$user = $pdo->query($sql)->fetch();
if($user['acc']==$acc && $user['pwd']==$pwd){
    $_SESSION['user']=$acc;
    header('location:index.php');

}else{
    header("location:login_form.php?error=帳號密碼錯誤");
}
