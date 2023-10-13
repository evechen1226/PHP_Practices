<h2>九九乘法表</h2>
<head>
    <style>
        table,
        tr,
        td{
            border-collapse: collapse;
            border: 1px solid black;
            padding: 15px 10px;
        }
table{
    
}

td{
    
}

    </style>
</head>

<?php

// 第一步：先將結果列出
// echo "1 x 1 = 1 , ";
// echo "1 x 2 = 2 , ";
// echo "1 x 3 = 3 , ";
// .
// .
// .

// 第二步:觀察重覆步驟，開始思考如何簡化重覆步驟
for ($i = 1; $i <= 9; $i++) {

    echo '1 x ' . $i . ' = ' . (1 * $i) . '&nbsp';
    echo '<br>';
}
echo '<hr>';

// 第三步：結果成功列出後，觀察可以簡化的部份
for ($j = 1; $j <= 9; $j++) {
    for ($i = 1; $i <= 9; $i++) {
        echo $j . ' x ' . $i . ' = ' . ($j * $i) . '&nbsp';
        echo '<br>';
    }
    echo '<hr>';
}

// 最終思考如何將所需畫面排列

echo '<table><tr>';

for ($j = 1; $j <= 9; $j++) {
    echo '<td>';
    for ($i = 1; $i <= 9; $i++) {
        echo $j . ' x ' . $i . ' = ' . ($j * $i) ;
        echo '<br>';
    }
    echo '</td>';
}

echo '</tr></table>';

//-------------------------------------- 
?>
<h2>九九乘法表-有標頭</h2>
<?php

echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo "";
        }else if($i==0){
            echo $j;
        }else if($i>$j){
            echo " " ;   
        
        }else{
            echo $j*$i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>




?>