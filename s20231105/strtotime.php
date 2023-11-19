<?php
echo strtotime("now"), "\n";
echo "<br>";
echo strtotime("now"), "xxxxx\n";
echo "<br>";
echo "這是第一行\n這是第二行";
echo strtotime("10 September 2000"), "\n";
echo "<br>";
echo strtotime("+1 day"), "\n";
echo "<br>";
echo strtotime("+1 week"), "\n";
echo "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo "<br>";

echo strtotime("next Thursday"), "\n";
echo "<br>";
echo strtotime("last Monday"), "\n";

echo "<br>";
$str = "10 September 2000";

if (($timestamp = strtotime($str)) === false) {
  echo "The string ($str) is bogus";
} else {
  echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
}
echo "<br>";
echo "<hr>";
?>
<?php
$todayWeek =date('N');
$daytoModay =1-$todayWeek;
$lastMonday =strtotime("$daytoModay days");
$nextMonday=date("Y-m-d",strtotime("+1 week",$lastMonday));
echo $daytoModay;
echo "<br>";
echo $lastMonday;
echo "<br>";
echo "$daytoModay days";
echo "<br>";
echo $nextMonday;
echo "<br>";
echo date("t");
?>

<h2>計算下次生日天數</h2>
<?php
$date = "1974-10-07";
$br = strtotime($date);
$diff = strtotime(date("Y") . "-" . date("m-d", $br));
$today = strtotime('now');
if ($diff > $today) {
  $days = ($diff - $today) / (60 * 60 * 24);
} else {
  $diff = strtotime("+1 year", $diff);
  $days = ($diff - $today) / (60 * 60 * 24);
}

echo "距離下一次生日:" . date("Y-m-d", $diff) . "還有" . floor($days) . "天";
?>