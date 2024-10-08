<!DOCTYPE html>
<html lang="en">

<?php

include("config.php");
 
// Connect to the database
$dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (mysqli_connect_errno())
{
    echo "Connection failed:".mysqli_connect_error();
    exit;
}

?>

<!-- The code below was generated by Chat GPT ans then edited. -->
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Unofficial Holidays: A comprehensive database of fun and unique unofficial holidays.
    Learn about quirky celebrations and observances around the world.">
    <meta name="keywords" content="Unofficial holidays, unique celebrations, quirky observances, fun holidays, unusual days,
    special occasions">
    <meta name="author" content="Andrei Rogelio">

    <title>Unofficial Holidays Database</title>

    <!-- Style sheets area -->
    <link rel="stylesheet" href="holiday_styles.css">

    <!-- Icon for tabs / bookmarks -->  
    <link rel="icon" type="image/png" href="images/favicon.ico">

    <!-- Font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Agbalumo&family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Font Awsome Link (for search icon) -->$_COOKIE<!-- Font Awesome Link (for search icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >

</head>