<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>

<body>
    123
    <?php
    session_start();
    if (isset($_COOKIE['login']) && !empty($_COOKIE['login'])) {
 // if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
        echo "<h3>登入成功</h3>";
        echo "<a href='./login.php'>回登入頁</a>";
        echo "<br>";
        echo "<a href='logout.php'>登出</a>";
    } else {
        // header("location:./login.php");
        // echo "沒有登入相關驗證，非法登入";

        //$_SESSION['error'] = "沒有登入相關驗證，非法登入";
        
        setcookie("error","沒有登入相關驗證，非法登入",time()+60);
        header("location:./login.php");
    }

    ?>

</body>

</html>