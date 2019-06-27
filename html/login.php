<?php
    @session_start();
    if($_POST != null){
        $account = $_POST['account'];
        $pass = $_POST['pass'];
        $_SESSION['account'] = $account;
        $_SESSION['pass'] = $pass;
        header("Location:./pulldb.php");
    }
?>