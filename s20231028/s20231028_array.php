<?php
$array =[3,2,7,10,30,17];
echo"<pre>";
print_r($array);
echo"</pre>";

sort($array);

//畫面顯示 1（ture）
echo "<pre>";
print_r(sort($array));
echo "</pre>";

$score =[
    'judy' => [
        '國文'=>'95',
        '英文'=>'64',
        '數學'=>'70',
        '地理'=>'90',
        '歷史'=>'84',
    ],
    'ano' => [
        '國文'=>'88',
        '英文'=>'78',
        '數學'=>'54',
        '地理'=>'81',
        '歷史'=>'71',
    ],
    'john' => [
        '國文'=>'45',
        '英文'=>'60',
        '數學'=>'68',
        '地理'=>'70',
        '歷史'=>'62',
    ],
    'peter' => [
        '國文'=>'59',
        '英文'=>'32',
        '數學'=>'77',
        '地理'=>'54',
        '歷史'=>'42',
    ],
    'hebe' => [
        '國文'=>'71',
        '英文'=>'62',
        '數學'=>'80',
        '地理'=>'62',
        '歷史'=>'64',
    ],
]

// in_array('hebe',$score)

// $a = [];
// $a = array('1.10', 12.4, 1.13);

// if (in_array('12.4', $a, true)) {
//     echo "'12.4' found with strict check\n";
// }

// if (in_array(1.13, $a, true)) {
//     echo "1.13 found with strict check\n";
// }

// explode()

// impoode()

?>