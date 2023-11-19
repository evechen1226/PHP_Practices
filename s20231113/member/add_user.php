<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
$sql = "insert into `users`(`acc`,`pwd`,`name`,`mail`,`address`)
                     values('{$_POST['acc']}',
                             '{$_POST['pwd']}',
                             '{$_POST['name']}',
                             '{$_POST['mail']}',
                             '{$_POST['address']}')";

// echo $sql;
$pdo->exec($sql);
header("location:index.php");                