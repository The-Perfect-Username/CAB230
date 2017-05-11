<?php

    if (isset($_POST['submit'])) {
        global $database;
        try {

            // Collect input values
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate user input
            validate_first_name($firstname);
            validate_last_name($lastname);
            validate_email($email);

            // Count if there are any errors found
            if (count($errors) === 0) {
                // Create salt
                $saltHash = md5(uniqid());
                $salt = substr($saltHash, 0, 20);

                // Concat salt to password and hash using sha1
                $password =  sha1($password . $salt);

                // Create and prepare query
                $query = "INSERT INTO users (firstname, lastname, email, password, salt)
                VALUES (:first_name, :last_name, :email, :password, :salt)";

                // Prepare the statement to prevent SQL injections
                $stmt = $database->prepare($query);

                // Bind parameters
                $stmt->bindParam(':first_name', $firstname);
                $stmt->bindParam(':last_name', $lastname);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', ($password));
                $stmt->bindParam(':salt', $salt);

                // Execute the query
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    // Get newly created account ID
                    $userId = $database->lastInsertId();
                    // Redirect to index.php
                    header("location: http://localhost/blog/index.php");
                }
            } else {
                print_r($errors);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
