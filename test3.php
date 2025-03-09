<?php
/*
過濾出庫存量不足的產品。
將產品名稱都轉成首字母大寫。
將新到貨的產品合併到清單中，並輸出最終結果。
*/ 

$products=array("pen"=>9,"phone"=>3,"bed"=>6,"computer"=>1);

#echo implode(" ",$products);
echo "products list"."<br>";
echo "pen count=".$products["pen"]."<br>";
echo "phone count=".$products["phone"]."<br>";
echo "bed count=".$products["bed"]."<br>";
echo "computer count=".$products["computer"]."<br>";
echo "少於5個的商品: <br>";
foreach ($products as $i=>$j){    
    if ($j<5){
        echo "$i : $j <br>";
    };
};
echo "將商品第一個字轉成大寫: <br>";
foreach ($products as $i=>$j){
    echo ucfirst($i)."<br>";
}
$pp=array("mouse"=>7,"water"=>20);
$a=array_merge($products,$pp);
echo "new products list"."<br>";
echo "mouse count=".$pp["mouse"]."<br>";
echo "water count=".$pp["water"]."<br>";
echo "old list add new list: <br>";
foreach ($a as $ii=>$jj){
    echo "$ii : $jj <br>";
}

?>