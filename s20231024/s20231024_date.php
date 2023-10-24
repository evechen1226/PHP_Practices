<head>
    <style>
        table, tr,td{
            width: 70%;
        }
    </style>
</head>

<h1>日期與時間</h1>

<?php

date_default_timezone_set('Asia/Taipei');

echo date("Y-m-d h:i:s") . "<br>";

echo date("Y-m-l z W t X h:i:s") . "<br>";
echo date("c");


?>

<h1>strtotime</h1>
<?php
echo strtotime("now") . "<br>";
?>

<h1>計算距離自己下一次生日還有幾天</h1>

<!-- 判斷生日是已過 -->
<?php
$brday = "1974-10-07";
$br = strtotime($brday);
// $brs = 計算秒數 ( 顯示時間("當下年") . "-" . 顯示時間 ("用後面的秒數，計算月-日" , 秒數) )
// $brs = strtotime("2023-10-07")
$brS = strtotime(date("Y") . "-" . date("m-d", $br));
$tdS = strtotime("now");
echo $brS . "<br>";
echo $tdS . "<br>";

echo date("m-d", $brS);

// if ($brS > $tdS) {
//      $day  = ;
// }

?>

<h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>

<li>2021/10/05</li>
<li>10月5日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
<?php

$day = date("N");
if ($day < 6) {

    $day = "上班日";
} else {
    $day = "假日";
}

echo date("Y / m / d") . "<br>";

echo date("m 月 d 日 l") . "<br>";
// 補零
echo date("Y - m - d  H : i : s") . "<br>";
// 不補零
echo date("Y - n - j  G : i : s") . "<br>";

echo date("今天是西元 Y 年 m 月 d 日 ") . $day . "<br>";


?>
<h3>利用迴圈來計算連續五個周一的日期</h3>
<li>例:</li>
<li>2021-10-04 星期一</li>
<li>2021-10-11 星期一</li>
<li>2021-10-18 星期一</li>
<li>2021-10-25 星期一</li>
<li>2021-11-01 星期一</li>

<?php
// 算出離最近的星期一的時間
// 算出下次的星期一日期


$day1 = date("d");

for ($i = 1; $i <= 5; $i++) {

    $monday = date(" Y - m - ") . $day1 . "星期一" . "<br>";
    $day1 = $day1 + 7;
    if ($day1 >= 30)
        echo $monday;
}

?>
<p></p>
<p></p>
<p></p>
