<?php

$sum=0;

$i=1;

while($i<=100){

  $sum += $i;

  $i ++ ;

};

echo '當 1 加到 100 的總數是' .$sum;

echo '<br>' .$sum .'跟' .$i .'<br>';

//此時 $sum 及 $i 值已改變

$sum=0;

$i=1;

while($i<=100){

  echo '當$i =' . $i .'時, $sum + $i = ' .$sum .'<br>';
  
  $sum += $i;

  $i++;

};