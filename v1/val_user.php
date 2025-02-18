<?php

include 'db_connect.php';

try {
    session_start();

    $sql = "SELECT username, password FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1,$_POST['username']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result){
        if(password_verify($_POST['password'],$result['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['snstatus'] = true;
            header("refresh:4; url=index.php");
            echo "<link rel = 'stylesheet' href = 'styles.css'>";
            echo "successfully logged in";

        } else {
            header("refresh:4; url=user_login.php");
            echo "<link rel = 'stylesheet' href = 'styles.css'>";
            echo "successfully logged in";
        }
        else {
            header("refresh:4; url=user_login.php");
            echo "<link rel = 'stylesheet' href = 'styles.css'>";
            echo "successfully logged in";
        }
    }


} catch (PDOException $e) {
    header("refresh:0; url=user_login.php");
    echo "<link rel = 'stylesheet' href = 'styles.css'>";
    echo "successfully logged in";
}