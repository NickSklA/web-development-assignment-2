<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/login-style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="resources/js/script.js"></script>

    <title>Sign in to DSFlix</title>
</head>
<body>

    <nav id="nav">
        <div class="main-header">
            <a href="index.php"><img class="nav-logo" src="resources/images/logo.png"></a>
        </div>
    </nav>

    <div class="content">
        <div class="login-form">

            <div class="login-container">
                <h1>Sign In</h1>

                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" required>

                <button class="button secondary-btn login-btn" type="submit">Sign in</button>
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