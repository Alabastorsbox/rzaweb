<?php

echo "<!DOCTYPE html";
echo "<html lang='en'>";  //comments

echo "<head>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "<title>rza Add Ticket</title>";
echo "</head>";

echo "<body>";

echo "<form method='post' action='valid_ticket.php'>"; //start form to collect ticket info

echo "<input type='text' name='type' placeholder='type' required><br>";

echo "<input type='text' name='price' placeholder='price' required><br>";

echo "<input type='text' name='no_of_tickets' placeholder='number of tickets per day' required><br>";

echo "<input type='submit' name='submit' value='submit'>"; //submits ticket info to form

echo "</form>";

echo "</html>";


