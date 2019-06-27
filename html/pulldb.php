<?php
@session_start();

    $account= $_POST['account'];
    $_SESSION['account'] = $account;
    $_SESSION['pass'] = $_POST['pass'];
    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=passDB;charset=utf8','remote','remote');
    } catch (PDOException $e) {
        //Catch Statement
        $err_msg = "#ERR:".$e->getMessage()."<br>";
    }

    $statement = $pdo->query("select * from list where user_name = '$account'");
    $record = $statement->fetch(PDO::FETCH_ASSOC);
    //var_dump($record);

    $_SESSION['okuser'] = $record["user_name"];
    $_SESSION['okpass'] = $record["password"];

    header("Location:./login_user.php");
?>