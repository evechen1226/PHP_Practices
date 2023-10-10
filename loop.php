
  <?php
$sum=0;
for($i=1;$i<=10;$i=$i+1){
 
 //使用雙引號 "  " 時，中間的 $i 會被當成變數，而不是字串
 //echo "當$i=" . $i ."時" ; 
  echo '當$i=' . $i .'時' ; 
  
//用 ( 算式 ) 可直接顯示算式結果，但不會賦值
  echo '$sum+$i的結果是' .($sum + $i) ;
  echo '<br>';

  //echo ' ($sum + $i + 2 ) ' .($sum + $i + 2) ;
  //echo '<br>';

  echo $sum . '←只有 $sum ';
  echo '<br>';

// $sum=$sum+$i;        →→→詳細寫法
  $sum +=$i;

//取餘數千萬不要用 " / " 會有浮點運算的問題
  if ($sum % 2 != 0){
    echo '這是奇數' .$sum;
    echo '<br>';
  }


}
  echo '<br>';
  echo '1加到100為' .$sum;
?>

<h3>迴圈練習</h3>
<ul>
  <il>1,3,5,7,9……n</il>
  <il>10,20,30,40,50,60……n</il>
  <il>3,5,7,11,13,17……97</il>
</ul>

<?php
$a=17;
$flag=true;
//找質數，除以數值一半的因數即可。
//找質數，除以數值的平方內，因數即可

for($i=2; $i<($a/2);$i++){
  echo "$a 除以 $i 除數" . ($a % $i);
  if(($a % $i) == 0){
    $flag= false;
    break;
  }
  echo "<br>";
}
if($flag == true){
  echo $a . '質數';
}else{
  echo $a .'不是質數';
}

?>