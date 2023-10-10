<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$sum=0;
for($i=1;$i<=100;$i=$i+1){
  // $sum=$sum+$i;        →→→詳細寫法
  $sum +=$i;
  echo "<br>";
  echo $sum;
}
  echo "<br>";
  echo "1加到100為" .$sum;
?>
</body>
</html>