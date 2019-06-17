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

    <title>Home Page</title>
</head>
<body>

    <nav id="nav">
        <div class="main-header">
            <a href="index.php"><img class="nav-logo" src="resources/images/logo.png"></a>
            <div class="nav-login">
                <ul>
                    <li><button class="button primary-btn">Sign In</button></li>
                    <li><button class="button secondary-btn">Sign Up</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="subheader">
        <div class="container">
            <h1>The world's most popular and authoritative source for movie, TV and celebrity content.</h1>
            <div class="select-style">
                <select>
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="adventure">Adventure</option>
                    <option value="comedy">Comedy</option>
                    <option value="documentary">Documentary</option>
                </select>
                <a href="#" class="fa fa-search"></a>
            </div>
        </div>
    </div>

    <div class="movie-list">
        <div class="container-full-width">
            
            <?php
                require_once('mysqli_connect.php');
        
                $query = "SELECT * FROM movie";
        
                $response = @mysqli_query($dbc, $query);
        
                if ($response) {

                    $resultsCount = mysqli_num_rows($response);

                    echo 
                    '<h3 style="color: white">Showing ' .  $resultsCount . ' results</h3>
                    <div class="wrapper">';

                    while($row = mysqli_fetch_array($response)) {
        
                        echo 
                        '<div class="movie">
                            <img class="movie-cover" src="' . $row['cover_image_path'] . '">
                            <div class="movie-info">
                            </div>
                        </div>';    
                    }
                }
            ?>

                <!-- <div class="movie">
                    <img class="movie-cover" src="resources/images/movie1.jpg">
                    <div class="movie-info">
                    </div>
                </div> -->
                <!-- <div class="movie">
                    <img class="movie-cover" src="resources/images/movie2.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie3.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie4.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie5.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie6.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie7.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie8.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie9.jpg">
                </div>
                <div class="movie">
                    <img class="movie-cover" src="resources/images/movie10.jpg">
                </div> -->
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