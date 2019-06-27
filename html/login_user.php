<?php 
    //include_once('./pulldb.php');
    @session_start();
    //ログインチェック
    $account = $_SESSION['account'];
    $pass = $_SESSION['pass'];
    $pass_account = $_SESSION['okuser'];
    $pass_password = $_SESSION['okpass'];

    $flg = false;

    if($pass_account == $account && $pass_password == $pass){
        $flg = true;
    }

    //exit;

    if(!$flg){
        header("Location:./failer.html");
    }else{
        header("Location:./mainpage.html");
    }

?>