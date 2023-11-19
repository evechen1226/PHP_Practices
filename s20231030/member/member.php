<?php include_once "session.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once("header.php");

    if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
        echo "<h3>登入成功</h3>";
        echo "<a href='./login.php'>回登入頁</a>";
        echo "<br>";
        echo "<a href='logout.php'>登出</a>";
    } else {
        // header("location:./login.php");
        // echo "沒有登入相關驗證，非法登入";
        $_SESSION['error'] = "沒有登入相關驗證，非法登入";
        header("location:./login.php");
    }

    ?>

</body>

</html>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni doloremque consequuntur perspiciatis quis! Repellendus sit nulla vero repellat, perferendis asperiores tenetur unde nam, eaque cumque molestias? Magni repellat ea provident?