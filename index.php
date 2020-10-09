<?php

declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

echo "Hello Friday! Time to calculate";

//Made a small "calculator" to link 2 pages with each other.
//index.php = front-end = fill in your numbers
//addition.php = back-end = result of the addition + reset
?>

<!-- Here is the HTML: -->
<!-- front-end file -->
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Simple calculator</title>
</head>
<body>
<h2>Addition</h2>
<form action="addition.php"
    method="get">
    First number: <input type="number" name="add_first">
    <br>
    Second number: <input type="number" name="add_second">
    <br>
    <button type = "submit">Add</button>
</form>


