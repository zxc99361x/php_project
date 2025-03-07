

<?php
$a=-2;
if($a>=1){echo"a為正數,a=".$a;}
else if($a==0){echo"等於0";}
else{echo"a為負數,a=".$a;};

$sum=0; 
$b=[1,2,3,4,5];

for($i=0;$i<count($b);$i++){
    $sum+=$b[$i];
}
#echo"<br>b=";
#print_r($b);
echo "<br>b = " . implode(", ", $b);
echo "<br>sum=".$sum;
?>
