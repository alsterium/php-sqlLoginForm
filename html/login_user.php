<?php 
    include('./pulldb.php');

    //ログインチェック
    $flg = false;
    if($pass_account == $account and $pass_password == $pass){
        $flg = true;
    }
    
    if(!$flg){
        header("Location:./failer.html");
    }else{
        header("Location:./mainpage.html");
    }

?>