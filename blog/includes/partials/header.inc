<?php
    // Include the database configuration parameters
    require_once "./config/DBconfig.inc";
    // Inclue the database connection
    require_once "./lib/Database.inc";
    require_once "./includes/functions.inc";
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="./public/css/default.css" rel="stylesheet" />
        <link href="./public/css/index.css" rel="stylesheet" />
        <link href="./public/css/register.css" rel="stylesheet" />
        <link href="./public/css/about.css" rel="stylesheet" />
        <script src="./public/js/index.js"></script>
        <script src="./public/js/register.js"></script>
        <script src="./public/js/about.js"></script>
    </head>
    <body>
        <header>
            <div class="header-container">
                <nav id="socialMediaMenu">
                    <a href="#">Facebook</a>
                    |
                    <a href="#">Twitter</a>
                    |
                    <a href="#">Instagram</a>
                    |
                    <a href="#">Tumblr</a>
                </nav>
                <nav id="accessMenu">
                    <a href="./register.php">Register</a>
                    |
                    <a href="./login.php">Login</a>
                </nav>
            </div>
        </header>
        <main>
            <section id="innerBackground">
