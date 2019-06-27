<?php
@session_start();
$result = '';
$phrase = 'empty';
    /*$pass_account = "root";
    $pass_password = "toor";
*/
    $account = $_SESSION['account'];
    $pass = $_SESSION['pass'];
    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=passDB;charset=utf8','remote','remote');
    } catch (PDOException $e) {
        //Catch Statement
        $err_msg = "#ERR:".$e->getMessage()."<br>";
    }

    $statement = $pdo->query("select * from list where user_name = '$account'");
    var_dump($statement);
    $record = $statement->fetch(PDO::FETCH_ASSOC);
    $pass_account = $record["user_name"];
    $pass_password = $record["password"];
    header("Location:./login_user.php");
?>