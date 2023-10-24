<?php

$nine = [];
// for ($j = 1; $j <= 9; $j++) {
//     }
//     for ($i = 1; $i <= 9; $i++) {
//         $nine[] = " $j x  $i = ". ($j * $i);
//         echo  $nine;
//         if($i % 9 == 0){
//             echo '<br>';
//         }
//     } 
// print_r($nine);
?>
<style>
    table,tr,td{
        border: 1px solid black;
    }
    table{
        border-collapse: collapse;
    }
</style>
<?php
for ($j = 1; $j <= 9; $j++) {

    for ($i = 1; $i <= 9; $i++) {
        $nine[]="$j x $i = " . ($j * $i) ;
    }
}

echo "<table>";
foreach($nine as $idx => $value){
    // echo $value ;
    if( $idx % 9 == 0 ) {
        echo "<tr><td>$value</td>";
    }else if( $idx % 9 == 8 ){
        echo "<td>$value</td></tr>";
    }else{
        echo"<td>$value</td>";
    }
    }

echo "</table>";
?>

<!--假程式碼
     <table>
if(xxxx){  
    <tr>
        <td></td>
}else if{
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
}else{
        <td></td>
    </tr>
}
</table> -->