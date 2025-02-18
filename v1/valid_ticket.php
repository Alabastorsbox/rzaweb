<?php

include 'db_connect.php'; //includes the database connection to insert data

try {
    $sql = "INSERT INTO ticket (type, price, no_of_tickets) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['type']); //bind param 1 for ticket type
    $stmt->bindParam(2, $_POST['price']); //bind param 2 for ticket price
    $stmt->bindParam(3, $_POST['no_of_tickets']); //bind param 3 for num of ticket

    $stmt->execute(); // sends the parameters and completes the insert into the database

    header("refresh:4; url=add_ticket.php");
    echo "<link rel='stylesheet' href='styles.css'>";
    echo "successfully registered " . $_POST['type'] . " ticket type";

} catch (PDOException $e) {

    header("refresh:4; url=add_ticket.php");
    echo "<link rel='stylesheet' href='styles.css'>";
    echo "Error: " . $e->getMessage();
    echo "Failed to add ticket type";
}
