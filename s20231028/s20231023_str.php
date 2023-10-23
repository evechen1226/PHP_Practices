<head>
    <style>
        .font{
            font-size: larger;
            color: red;
        }
    </style>
</head>

<h2>字串取代</h2>
<li>將”aaddw1123”改成”*********”</li>
<p>
<?php
$s="aaddw1123";
echo "<br>";
$t=str_replace(['a','w',1],'*',$s);
echo $t;

echo "<br>";
// 除英文外， 要用mb_strlen()，計算字串長度
echo str_repeat("*",mb_strlen($s));

?>
</p>
<h2>字串分割</h2>
<li>將”this,is,a,book”依”,”切割後成為陣列</li>
<?php
$s="this,is,a,book";
$a=explode(',', $s);
echo "<pre>";
print_r($a);
echo "</pre>";

?>
<h2>字串組合</h2>
<li>將上例陣列重新組合成“this is a book”</li>
<?php
echo join(' ',$a);

?>

<h2>子字串取用</h2>
<li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
<?php
$s="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($s,0,10) . "...<br>";

// 中文字要使用mb_substr, 一個中文字等於3個字元
$cs="今天天氣真的是不太好的樣子";
echo mb_substr($cs,0,3) . "...<br>";
$cs="今天天氣真的是不太好的樣子";
echo mb_substr($cs,0,6) . "...<br>";


?>
<h2>尋找字串與HTML、css整合應用</h2>
<li>給定一個句子，將指定的關鍵字放大</li>
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
<li>請將上句中的 “程式設計” 放大字型或變色.</li>

<?php
$key="程式設計";


$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";

echo str_replace($key,"<span class=font>$key</span>",$str);


?>

<br>
<!-- PHP源自於 C 語言，最小的單位為 chr 字元，在C語言裡，所有的字串都是陣列組成。 -->
<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
for($i=0;$i<mb_strlen($str);$i=$i+3){
    //echo mb_substr($str,$i,1);
    echo $str[$i];
    echo $str[$i+1];
    echo $str[$i+2];
    echo "<br>";
    
}



?>