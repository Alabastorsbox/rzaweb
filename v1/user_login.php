<?php

echo "<!DOCTYPE html";
echo "<html lang='en'>";  //comments

echo "<head>";

echo "<link rel='stylesheet' href='styles.css'>";

echo "<title>rza user login</title>";

echo "</head>";

echo "<body>";

echo "<form method='post' action='val_login.php'>"; //start form to collect ticket info

echo "<input type='text' name='username' placeholder='Username' required><br>";

echo "<input type='password' name='password' placeholder='Password' required><br>";

echo "<input type='password' name='cpassword' placeholder='Confirm Password' required><br>";

echo "<input type='submit' name='submit' value='submit'>"; //submits ticket info to form

echo "</form>";

echo "</html>";


