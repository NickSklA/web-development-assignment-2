<?php
    require_once('mysqli_connect.php');

    session_start();

    // register user
    if (isset($_POST['reg_user'])) {
        
        // receive all input values from the form
        $firstName = mysqli_real_escape_string($dbc, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($dbc, $_POST['lastName']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $age = mysqli_real_escape_string($dbc, $_POST['age']);
        $jobTitle = mysqli_real_escape_string($dbc, $_POST['jobTitle']);
        $username = mysqli_real_escape_string($dbc, $_POST['username']);
        $password = mysqli_real_escape_string($dbc, $_POST['password']);
        
        // check db for smae username
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($dbc, $query);
        $user = mysqli_fetch_assoc($result);

        // if user does not exists
        if (!$user) {
            $query = "INSERT INTO users (firstName, lastName, email, age, job_title, username, password)
            VALUES('$firstName', '$lastName', '$email', $age, '$jobTitle', '$username', '$password')";
            mysqli_query($dbc, $query);
            $_SESSION['userId'] = mysqli_insert_id($dbc);
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $firstName. ' ' . $lastName;
  	        $_SESSION['success'] = "You are now logged in";
  	        header('location: index.php');
        }
    }

    // login user
    if (isset($_POST['lgn_user'])) {

        // receive all input values from the form
        $username = mysqli_real_escape_string($dbc, $_POST['username']);
        $password = mysqli_real_escape_string($dbc, $_POST['password']);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($dbc, $query);
        if (mysqli_num_rows($results) == 1) {
            $user = mysqli_fetch_assoc($results);
            $_SESSION['userId'] = $user['userId'];
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $user['firstName'] . ' ' . $user['lastName'];
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }

    // submit comment
    if (isset($_POST['submit_comment'])) {

        // get user id
        $userId = $_SESSION['userId'];

        // get movie id
        $movieId = mysqli_real_escape_string($dbc, $_POST['movieId']);
        
        // user comment text
        $comment =  mysqli_real_escape_string($dbc, $_POST['comment']);

        // insert data to db
        $query = "INSERT INTO comment (userId, movieId, comment) VALUES ('$userId', '$movieId', '$comment')";

        // execute query
        if (mysqli_query($dbc, $query)) {
            // redirect to movie.php
            header("Refresh: 1; URL = movie.php?id=$movieId");
        }    
    }
?>