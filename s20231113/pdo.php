<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');
// $sql="select * from students";
// $rows=$pdo->query($sql)->fetchAll();
// echo "<pre>";
// print_r($rows);
// echo "</pre>";

//---------新增資料-------------
// $sql="insert into `dept`(`code`,`name`) values('801','會計科');";
// $pdo->query($sql);

//---------修改資料-------------
// $sql ="update `dept` set `code`='901',`name`='製圖科' where `id`='8'";
// $pdo->query($sql);

//---------刪除資料-------------
// $sql = "delete from `dept` where `id`='8'";
// $pdo->query($sql);


// $pdo->query($sql); //query()指令：只回傳查詢內容，新增不會顯示
$sql="update `dept` set `code`='901',`name`='1112' where `id`='10'";
print_r(exec($sql));  //exec()指令：回傳影響幾筆資料
