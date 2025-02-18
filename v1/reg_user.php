<?php

if($_POST['cpassword'] != $_POST['password']){
    header("refresh:4; url=user_reg.php");
    echo "<link rel='stylesheet' href='styles.css'>";
    echo "failed to create user, passwords dont match";
} else {

    include 'db_connect.php'; //includes the database connection to insert data

    try {
        $sql = "INSERT INTO user (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        $hpswd = password_hash($_POST['password'], PASSWORD_DEFAULT); // has the password

        $stmt->bindParam(1, $_POST['username']); //bind param 1 for ticket type
        $stmt->bindParam(2, $hpswd); //bind param 2 for ticket price
        $stmt->bindParam(3, $_POST['email']); //bind param 3 for num of ticket

        $stmt->execute(); // sends the parameters and completes the insert into the database

        header("refresh:4; url=index.php");
        echo "<link rel='stylesheet' href='styles.css'>";
        echo "successfully registered your account";
    } catch (PDOException $e) {

        header("refresh:4; url=add_ticket.php");
        echo "<link rel='stylesheet' href='styles.css'>";
        echo "Error: " . $e->getMessage();
        echo "Failed to register your account";
    }
}