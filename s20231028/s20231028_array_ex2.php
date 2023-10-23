<?php
$first = [];
$second = [];
$f = 0;
$min = 1;
$max = 38;

for ($i = 1; $i <= 6; $i++) {
    $first[] = rand($min, $max);
}

print_r($first);


while (count($first) < 6) {
    $tmp = rand(1, 38);
    if (!in_array($min,$fist)) {
        $first[] = $tmp;
    }
}

echo ""


?>

<li>威力彩</li>
<li>1~38，取6</li>
<li>1~8，取1</li>

<li>找出五百年內的閏年</li>
<li>請依照閏年公式找出五百年內的閏年</li>
<li>使用陣列來儲存閏年</li>
<li>使用迴圈來印出閏年</li>

<?php

$year = [];

for ($i = 2023; $i <= 2523; $i++) {

    if (($i % 4 === 0 && $i % 100 != 0) || $i % 400 == 0) {
        echo $i . "是";
        $year[] = $i;
        // }else{              不是閏年
        //     echo $i."不是";
    }
}

foreach ($year as $n) {
    echo $n . " , ";
}
echo count($year);
?>

<li>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</li>
<li>天干：甲乙丙丁戊己庚辛壬癸</li>
<li>地支：子丑寅卯辰巳午未申酉戌亥</li>
<li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
<?php

// 規則請見老師的excel

$year = 2025;
$firstYear = ['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$secondYear = ['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$tmp = 0;
echo "西元" .$year ."是";
echo $firstYear[($year-1024)%10];
echo $secondYear[($year-1024)%12];
echo "年";


?>