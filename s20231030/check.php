<?php

session_start();

if($_POST['acc']=='admin' && $_POST['pw']=='1234'){

    //SESSION---→ 同時可以知道登入成功及登入帳號
    //SESSION---→ $_SESSION['login']=$_POST['acc'];

   // GET & POST ---→ header("location:member.php?login=1");
  
   // SESSION---→ header("location:./member.php");
   
   //設定cookie 
   setcookie("login","mackliu",time()+60);

}else{
 
    //GET & POST ---→ header("location:login.php?m=帳號或密碼錯誤,請重新登入");+9

    //SESSION---→ $_SESSION['error']="帳號或密碼錯誤,請重新登入";
    
    header("location:./login.php");
    
}
?>