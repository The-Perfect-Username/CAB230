<?php

$time = microtime(TRUE);
$mem = memory_get_usage();

$host = "localhost";
$username = "root";
$password = "";
$dbName = "blog_db";

// Create a new database
try {
    $database = new PDO("mysql:host=$host;dbname=", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $dbName CHARACTER SET utf8 COLLATE utf8_general_ci;";

    $statement = $database->prepare($sql);
    $statement->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
}
// Establish connection with newly created database
try {
    $database = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();
}

// Create the users table
try {
    // Email is set to UNIQUE because we only want each email address to be submitted only once
    $sql = "CREATE TABLE IF NOT EXISTS users
                                (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                firstname VARCHAR(30) NOT NULL,
                                lastname VARCHAR(30) NOT NULL,
                                email VARCHAR(50) UNIQUE NOT NULL,
                                password VARCHAR(250) NOT NULL,
                                salt VARCHAR(20) NOT NULL)
                                CHARACTER SET utf8 COLLATE utf8_general_ci;";

    $statement = $database->prepare($sql);
    $statement->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
}

// Create user privilege table
try {
    $sql = "CREATE TABLE IF NOT EXISTS roles
                                (id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                role VARCHAR(15) NOT NULL)
                                CHARACTER SET utf8 COLLATE utf8_general_ci;";
    $statement = $database->prepare($sql);
    $statement->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
}

// Create table to assign user privileges
try {
    $sql = "CREATE TABLE IF NOT EXISTS user_in_roles
                                (user_id INT(6) UNSIGNED UNIQUE NOT NULL,
                                role_id INT(1) UNSIGNED NOT NULL)
                                CHARACTER SET utf8 COLLATE utf8_general_ci;";
    $statement = $database->prepare($sql);
    $statement->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
}

// Create the posts table to contain the blog posts
try {
    $sql = "CREATE TABLE IF NOT EXISTS posts
                                (id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                userid INT(6) UNSIGNED NOT NULL,
                                title VARCHAR(100) NOT NULL,
                                post TEXT NOT NULL,
                                date_time DATETIME NOT NULL)
                                CHARACTER SET utf8 COLLATE utf8_general_ci;";
    $statement = $database->prepare($sql);
    $statement->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
}

// Create new user accounts
try {
    $sql = "INSERT IGNORE INTO users (firstname, lastname, email, password, salt)
            VALUES (:firstname, :lastname, :email, :password, :salt)";

    $statement = $database->prepare($sql);

    $salt = substr(md5(uniqid()), 0, 20);
    $password = "password" . $salt;

    $array = array(
        ":firstname" => "Foo",
        ":lastname" => "Bar",
        ":email" => "foobar@gmail.com",
        ":password" => sha1($password),
        ":salt" => $salt
    );

    $statement->execute($array);

    $salt = substr(md5(uniqid()), 0, 20);

    $password = "password" . $salt;

    $array = array(
        ":firstname" => "John",
        ":lastname" => "Doe",
        ":email" => "johndoe@gmail.com",
        ":password" => sha1($password),
        ":salt" => $salt
    );

    $statement->execute($array);

    $salt = substr(md5(uniqid()), 0, 20);

    $password = "password" . $salt;

    $array = array(
        ":firstname" => "Jane",
        ":lastname" => "Doe",
        ":email" => "janedoe@gmail.com",
        ":password" => sha1($password),
        ":salt" => $salt
    );

    $statement->execute($array);

} catch (PDOException $e) {
    echo $e->getMessage();
}

print_r(array(
  'memory' => (memory_get_usage() - $mem) / (1024 * 1024) . " MB",
  'seconds' => microtime(TRUE) - $time
));

$sql = "CREATE TABLE IF NOT EXISTS posts
                            (id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            userid INT(6) UNSIGNED NOT NULL,
                            title VARCHAR(100) NOT NULL,
                            post TEXT NOT NULL,
                            date_time DATETIME NOT NULL)
                            CHARACTER SET utf8 COLLATE utf8_general_ci;";
$statement = $database->prepare($sql);

$statement->execute();
