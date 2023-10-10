
  <?php
$sum=0;
for($i=1;$i<=100;$i=$i+1){
 
 //使用雙引號 "  " 時，中間的 $i 會被當成變數，而不是字串
 //echo "當$i=" . $i ."時" ; 
  echo '當$i=' . $i .'時' ; 
  
//用 ( 算式 ) 可直接顯示算式結果，但不會賦值
  echo '$sum+$i的結果是' .($sum + $i) ;
  echo '<br>';

  echo ' ($sum + $i + 2 ) ' .($sum + $i + 2) ;
  echo '<br>';

  echo $sum . '←只有 $sum ';
  echo '<br>';

// $sum=$sum+$i;        →→→詳細寫法
  $sum +=$i;



}
  echo '<br>';
  echo '1加到100為' .$sum;
?>
