<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
  </style>

</head>
<body>
<table>
  <tr>
    <td><?php

$i = 1;

while($i<=100){

echo $i . '<br>';

// $i = 1+2
$i = $i+2 ;

};


  ?></td>
    <td>
      <?php

$sum = 0;
$i = 1;

while($i<=100){

  $sum = $sum + 10;
  $i ++ ;
  echo $sum . '<br>';
  if ($sum >= 100) {
        break; 
    };

};


  ?></td>
    <td></td>
  </tr>
</table>

</body>
</html>