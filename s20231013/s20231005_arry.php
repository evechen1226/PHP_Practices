<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $no_array = 12324657987;
    $a = [];
    // 宣告時給值，一維陣列
    $a[1] = "A";
    $a[] = "A";
    $a = ["A", "B", "C"];
    $a = [1, 2, 3, 4, 5, 6, 7];
    $b = [2 => "a", 3 => "b", 4 => "C"];
    $c = array("A", "B", "C");
    $name = [
        'alice' => 90,
        'bob' => 80,
        'cat' => 60,
    ];


    echo $name['cat'];
    echo "<br>";
    print_r($a);

    echo "<br>";

    print_r($b);
    echo "<br>";

    print_r($c);
    echo "<br>";

    echo $a[2];

    // 多維陣列

    $score = [
        '數學' => [
            [
                '姓名' => '小明',
                '成績' => 90,
                '名次' => '第一名'
            ],
            [
                '姓名' => '大美',
                '成績' => 60,
                '名次' => '第三名'
            ],
            [
                '姓名' => '鐵雄',
                '成績' => 88,
                '名次' => '第二名'
            ],
        ],
        '國文' => [
            [
                '姓名' => '小明',
                '成績' => 60,
                '名次' => '第三名'
            ],
            [
                '姓名' => '大美',
                '成績' => 70,
                '名次' => '第二名'
            ],
            [
                '姓名' => '鐵雄',
                '成績' => 98,
                '名次' => '第一名'
            ],
        ],
    ];

    echo "<br>";

    if (is_array($a)) {
        echo '$a 是一個陣列。 <br>';
    } else {
        echo '$score 不是一個陣列。 <br>';
    }
    if (is_array($no_array)) {
        echo '$no_array 是一個陣列。 <br>';
    } else {
        echo '$no_array 不是一個陣列。 <br>';
    }

    if (in_array("數學", $score)) {
        echo '3在陣列裡。 <br>';
    } else {
        echo '3不在陣列裡。 <br>';
    }

    ?>

</body>

</html>