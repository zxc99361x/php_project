<?php
echo "one piece is real ,real loaction is ".strpos("one piece is real ,real loaction is","real")."<br>";
echo "substr abcdefg -1 is ".substr("abcdefg",-1)."<br>";
$a="hello python,nice to meet you";
$b=array("python");
$c=array("php");
$aa=str_replace($b,$c,$a);
echo "old str is ".$a."<br>";
echo "new str is ".$aa."<br>";

$listt  = "piece|a|cake";
$listt2 = explode("|", $listt);

echo "listt is ".$listt."<br>"; 
echo "listt expload 2 | is ".$listt2[2]."<br>"; 

$listt3=["apple","banana","cat","dog"];
echo "listt3 implode is ".implode(",",$listt3)."<br>";
$listt4=" \t\t\ta  \nb   \0\t\t\tc\r    d\v \x00";
echo "listt4 is ".$listt4."<br>";
echo "after trim listt4 is ".trim($listt4)."<br>";
$listt5="abcde";
$listt6="ABCDE";
$listt7="aBcDe";

echo "listt5~7 is <br>".$listt5."<br>".$listt6."<br>".$listt7."<br>";
echo "strtoupper 5 is ".strtoupper($listt5)."<br>";
echo "strtolower 6 is ".strtolower($listt6)."<br>";
echo "ucfirst 7 is ".ucfirst($listt7)."<br>";
#正則表達尚未明白作用
preg_match('/(abc)(def)(ghi)/', 'abcdefghi', $matches, PREG_OFFSET_CAPTURE);
echo print_r($matches)."<br>";

$listt8='boxi 10, 1999';
$listt9='/(\w+) (\d+), (\d+)/i';
$listt10='${1}1,$3';
echo preg_replace($listt9,$listt10,$listt8)."<br>";

?>