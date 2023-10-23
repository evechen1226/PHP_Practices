<h3>斜線星星</h3>

<head>
  <style>
    * {
      font-family: 'Courier New', Courier, monospace;
      line-height: 2;
    }
  </style>
</head>


<?php

for ($j = 0; $j <= 5; $j++) {

  for ($k = 0; $k <= $j; $k++) {
    echo "&nbsp";
  }

  if ($j==0 || $j ==5){
    echo '<span style ="color:red;">*</span>';
  }else{
  
  echo '*';}

  // for ($i = 0; $i <= 5; $i++) {

  // }

  echo '<br>';
}



?>