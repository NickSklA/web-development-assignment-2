<?php 
    session_start(); 
    
    if (!isset($_SESSION['username'])) {
        session_destroy();
    }

    require_once('mysqli_connect.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $categoryId = $_GET['id'];  
    }
    else {
        // redirect to home page
        header('Location: index.php');
    }

    if (!empty($categoryId)) {

        $query = "SELECT category_name FROM category WHERE categoryId = $categoryId";

        $response = @mysqli_query($dbc, $query);

        if ($response) {
            $category = mysqli_fetch_assoc($response);

            $categoryName = $category['category_name'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="resources/js/script.js"></script>

    <title>Category - <?php echo $categoryName ?></title>
</head>
<body>

    <nav id="nav">
        <div class="main-header">
            <a href="index.php"><img class="nav-logo" src="resources/images/logo.png"></a>
                <?php
                    if (isset($_SESSION['fullname'])) {
                        echo
                        '<div class="nav-user">' . 
                            '<h3 class="fullname">' . $_SESSION['fullname'] . '</h3>' . 
                            '<div id="logout">' . 
                                '<h4 style="color: white;" onclick='."'window.location.href=".'"logout.php"'."'>Logout</h4>" . 
                            '</div>' . 
                        '</div>';
                    }
                    else if (!isset($_SESSION['fullname'])) {
                        echo
                        '<div class="nav-login">' . 
                            '<ul>' .
                                '<li><button class="button primary-btn" onclick="location.href=' . "'login.php'" . '">Sign In</button></li>' .
                                '<li><button class="button secondary-btn" onclick="location.href=' . "'register.php'" . '">Sign Up</button></li>' .
                            '</ul>' . 
                        '</div>';
                    }
                ?>
        </div>
    </nav>

    <div class="subheader category">
        <div class="container">
            <h1><?php echo $categoryName ?></h1>
        </div>
    </div>

    <div class="movie-list">
        <div class="container-full-width">
            
            <?php
                require_once('mysqli_connect.php');
        
                $query = 
                "SELECT movie.* , ROUND(AVG(rate), 1) as rate
                FROM movie_has_category, movie, rating 
                WHERE movie_has_category.categoryId = $categoryId 
                AND movie.movieId = movie_has_category.movieId 
                AND movie.movieId = rating.movieId 
                GROUP BY movie.movieId";
        
                $response = @mysqli_query($dbc, $query);
        
                if ($response) {

                    $resultsCount = mysqli_num_rows($response);

                    echo 
                    '<h3 style="color: white">Showing ' .  $resultsCount . ' results</h3>
                    <div class="wrapper">';

                    while($row = mysqli_fetch_array($response)) {
        
                        echo 
                        '<div class="movie-category">
                            <div class="movie-info">
                                <div class="movie-details">
                                    <h1>' . $row['name'] . '</h1>
                                    <p>' . $row['summary'] . '</p>
                                    <h3>' . $row['rate'] . '/8</h3>
                                    <button class="button secondary-btn" onclick="location.href=movie.php?id=' . $row['movieId']  . '">See more</button>
                                </div>
                            </div>
                            <a href="movie.php?id='.$row['movieId'].'"><img class="movie-cover" src="'.$row['cover_image_path'].'"></a>
                        </div>';
                    }
                }
            ?>
            </div>
        </div>
    </div>

    <footer>
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