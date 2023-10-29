<?php

//判斷BMI.php是否有送出的資料
if (!empty($_GET)) {

  // $height = $_GET['height'];
  // empty()：空集合為 ture, !empty()：有東西為 ture
  // ↓
  // $height=(!empty($_GET['height']))?$_GET['height']:'沒有身高資料';
  // ↓
  // $height = $_GET['height']??'沒有體重資料'; -------> //只有在一個條件下才可以這樣簡寫。

  // $weight = $_GET['weight'];
  // ↓
  // $weight = (!empty($_GET['weight'])) ? $_GET['weight'] : '沒有體重資料';

  // 判斷接到資料是否為空白字串

  if ($_GET['weight'] != "" && $_GET['height'] != "") {

    $weight = $_GET['weight'];
    $height = $_GET['height'];
    //將字串轉為數值 floatval()
    $weight = floatval($weight);
    $height = floatval($height);

    if ($height > 0) {
      $bmi = round($weight / ($height * $height), 2);

      header("location:./s20231027_bmi.php?w=$weight&h=$height&bmi=$bmi");
    } else {
      header("location:./s20231027_bmi.php?m=請輸入合理身高或體重資訊");
    }
  } else {
    header("location:./s20231027_bmi.php?m=請輸入合理身高或體重資訊");
  }

  // echo "BIM為 $bmi " ;
  // echo $height;
  // echo $weight;
  // echo $_GET['height'] → 盡量不要直接利用資料;
  // echo $_GET['height'];

} else {
  // echo "請輸入必要的資訊";
  header("location:./s20231027_bmi.php?m=請輸入必要的資訊");
}
