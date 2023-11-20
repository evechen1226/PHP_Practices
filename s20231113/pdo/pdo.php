<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

//-----------fetch()-----------只提取一筆

//對每個 fetch 都獨立執行了查詢，等於說重新執行了查詢，所以返回的結果相同。
$sql = "select * from students";
$rows = $pdo->query($sql)->fetch();
$rows = $pdo->query($sql)->fetch();
$rows = $pdo->query($sql)->fetch();
echo "<pre>";
print_r($rows);
echo "<?pre>";

//先執行一次查詢，將查詢結果存入$source，然後從結果（$source）以疊加方式提取。
$sql = "SELECT * FROM students";
$source = $pdo->query($sql);
$rows = $source->fetch();
$rows = $source->fetch();
$rows = $source->fetch();
echo "<pre>";
print_r($rows);
echo "<?pre>";

//-----------fetchAll()-----------提取全部
$sql = "SELECT * FROM students";
$source = $pdo->query($sql);
$rows = $source->fetchAll();
echo "<pre>";
print_r($rows[1]['name']);
echo "<?pre>";

//------------insert into .......values---------
// $sql="insert into `dept`(`code`,`name`) values('808','金融保險科');";
// $pdo->query($sql);
// $sql ="select * from `dept`";
// $rows=$pdo->query($sql)->fetchAll();
// print_r($rows);

//------------update....set......where---------
// $sql="update `dept` set `code`='901',`name`='統計科' where `id` = '7';";
// $pdo->query($sql);
// $sql = "select * from `dept`";
// $rows = $pdo->query($sql)->fetchAll();
// print_r($rows);

//------------delete from......where---------
// $sql="delete from `dept` where `id` = '7';";
// $pdo->query($sql);
// $sql = "select * from `dept`";
// $rows = $pdo->query($sql)->fetchAll();
// print_r($rows);

//------------exec(....)----------執行成功回傳 1，失敗回傳 0
echo "</br>";
$sql = "delete from `dept` where `id` = '11';";
echo $pdo->exec($sql);
