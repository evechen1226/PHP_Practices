<?php

session_start();

if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    //同時可以知道登入成功及登入帳號
    $_SESSION['login']=$_POST['acc'];

   // header("location:member.php?login=1");
    header("location:./member.php");
}else{
 
    //header("location:login.php?m=帳號或密碼錯誤,請重新登入");

    $_SESSION['error']="帳號或密碼錯誤,請重新登入";
    header("location:./login.php");
    
}
?>