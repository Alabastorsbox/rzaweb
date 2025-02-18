<?php

session_start();

echo "hello world";

if ($_SESSION["ssnstatus"] == true) {
    echo "hello world!"
} else {
    echo "you're not logged in";
}