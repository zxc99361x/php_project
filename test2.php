<?php 
#shift+alt+a
/* $arr=[5,10,15,20,25];
echo implode(",",$arr)."<br>";
echo array_push($arr)."<br>";
echo implode(",",$arr)."<br>";
echo array_pop($arr)."<br>";
echo implode(",",$arr)."<br>";
echo array_shift($arr)."<br>";
echo implode(",",$arr)."<br>";
echo array_unshift($arr)."<br>";
echo implode(",",$arr)."<br>"; */

$fruits = ["apple", "banana", "mango"];
$colorr = ["red", "blue", "black"];
$AA = ["REDD", "BLUEE", "BLACKK","BLUEE"];
$a=array_merge($fruits,$colorr);#合併
$b=array_slice($fruits,1);#在指定位置開始印
$c=array_splice($colorr,1,count($colorr),"green"); #可以印出到指定位置且可以更換指定位置
$d=array_map('strtolower',$AA);#將所有字串轉成小寫
$e=array_unique($AA);#移除重複字串
$f=array_filter($fruits,function($fruit){#將所有包含n的字串回傳
    return stripos($fruit,'n') !==false;
});
echo "fruits=".implode(",",$fruits)."<br>";
echo "colorr=".implode(",",$colorr)."<br>";
echo "AA=".implode(",",$AA)."<br><br>";

echo "array_merge= ".implode(" ",$a)."<br>";
echo "array_slice= ".implode(" ",$b)."<br>";  
echo "array_splice= ".implode(" ",$c)."<br>";
echo "array_map= ".implode(" ",$d)."<br>";
echo "array_unique= ".implode(" ",$e)."<br>";
echo "array_filter= ".implode(" ",$f)."<br>";
?>