<?php
include_once "./include/connect.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];


//$sql="select * from users where `acc`='$acc' && `pw`='$pw'";
$sql="select count(*) from users where `acc`='$acc' && `pw`='$pw'";

// -------debug 使用--------
// echo $sql;
// exit();

// $user = $pdo->query($sql)->fetch();
// if($user['acc']==$acc && $user['pwd']==$pwd){

//$user=$pdo->query($sql)->fetch();
$user=$pdo->query($sql)->fetchColumn();
//print_r($user);

//if($user['acc']==$acc && $user['pw']==$pw){
    // if($user){
$user = $pdo->query($sql)->fetch();
if($user['acc']==$acc && $user['pwd']==$pwd){
    $_SESSION['user']=$acc;
    header("location:index.php");
}else{
    header('location:login_form.php?error=帳號密碼錯誤');
}


?>