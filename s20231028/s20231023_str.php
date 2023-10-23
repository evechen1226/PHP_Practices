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
echo mb_substr($s,0,10) . "...";

// 中文字要使用mb_substr, 一個中文字等於3個字元
$cs="給定一個句子，將指定的關鍵字放大";
echo mb_substr($cs,0,3);


?>
<h2>尋找字串與HTML、css整合應用</h2>
<li>給定一個句子，將指定的關鍵字放大</li>
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
<li>請將上句中的 “程式設計” 放大字型或變色.</li>

<?php
$s="學會PHP網頁程式設計，薪水會加倍，工作會好找";

echo mb_strpos($s,"程");
echo mb_substr($s,7,4);


?>