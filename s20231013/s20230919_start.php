<!-- 一般字體大小不一 -->
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }

    p {
        color: red
    }
</style>


<?php

echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";

echo "<br>";
// i   j


for ($i = 4; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "*<br>";
}

echo "&nbsp &nbsp &nbsp &nbsp * &nbsp &nbsp &nbsp &nbsp <br>";
echo "&nbsp &nbsp &nbsp  ***  &nbsp &nbsp &nbsp <br>";
echo "&nbsp &nbsp ***** &nbsp &nbsp<br>";
echo "&nbsp ******* &nbsp <br>";
echo "*********<br>";

echo "<br>";

echo "<hr>2";

echo "<br>";

$change = 10;

for ($i = $change; $i >= 0; $i--) {

    for ($j = 0; $j < ($change - $i); $j++) {
        echo "&nbsp";
    }
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }

    echo "<br>";
}

echo "<hr>3";
echo "<br>";

$mid = floor(($change * 2 - 1) / 2);
for ($i = 0; $i < ($change * 2 - 1); $i++) {

    if ($i <= $mid) {
        $tmp = $i;
    } else {
        $tmp--;
    }
    //從8-$tmp修正為4-$tmp, 因從第四次迴圈開始，逐次遞減
    for ($j = 0; $j < ($mid - $tmp); $j++) {
        echo "&nbsp";
    }
    for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
        echo "*";
    }

    echo "<br>";
}

for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {

        if ($i == 0 || $i == 6) {
            echo "*";
        } else if ($j == 0 || $j == 6) {
            echo "*";
        } else {
            echo "&nbsp";
        }
    }
    echo "<br>";
}

for ($i = 0; $i < 7; $i++) {

    for ($j = 0; $j < 7; $j++) {
        if ($i == 0 || $i == 6) {
            echo "*";
        } else if ($j == 0 || $j == 6) {
            echo "*";
        } else if ($j == $i || $i + $j == 6) {
            echo "<span style='color:red'>*</span>";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
