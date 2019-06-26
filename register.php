<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/register-style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="resources/js/script.js"></script>

    <title>Sign up to DSFlix</title>
</head>
<body>

    <nav id="nav">
        <div class="main-header">
            <a href="index.php"><img class="nav-logo" src="resources/images/logo.png"></a>
        </div>
    </nav>

    <div class="content">
        <div class="register-form">

            <div class="register-container">
                <h1>Sign Up</h1>

                <form method="post" action="register.php">
                    <label for="firstName"><b>First Name</b></label>
                    <input type="text" name="firstName" required>
    
                    <label for="lastName"><b>Last Name</b></label>
                    <input type="text" name="lastName" required>
                    
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" required>
    
                    <label for="age"><b>Age</b></label>
                    <input type="number" min="12" max="100" name="age" required>
    
                    <label for="jobTitle"><b>Job Title</b></label>
                    <input type="text" name="jobTitle" required>
    
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" required>
    
                    <label for="password"><b>Password</b></label>
                    <input type="password" name="password" required>
    
                    <button class="button secondary-btn register-btn" type="submit" name="reg_user">Sign in</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="sticky">
        <p>
            &copy 2019
            <a href="https://www.linkedin.com/in/nikos-sklavounos">
                Nikos Sklavounos.
            </a>
            All rights reserved.
        </p>
    </footer>
</body>
</html>