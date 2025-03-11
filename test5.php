<?php
/*
驗證 email 格式（可以用 filter_var() 或 preg_match()）。
檢查字串長度是否符合需求。
移除使用者輸入前後的空白或特殊字元。
*/ 
$email="";
$min_length=5;
$max_length=30;

function email_input($email,$min_length,$max_length){
    #清除空白
    $email=trim($email);

    $lens=strlen($email);
    #檢查長度
    if($lens<$min_length || $lens>$max_length){
        return false;
    }
    #檢查是否正確格式
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return $email;
}
$input_email="   1   ";
$val_email=email_input($input_email,$min_length,$max_length);
if($val_email===false){
    echo "驗證失敗，請確認你的email格式與長度是否正確。";
}else{
    echo "驗證成功: ".$val_email;
}


?>