<?php
    require_once('mysqli_connect.php');

    if (isset($_GET['id'])) {
        $movieId = $_GET['id'];
    }
    else {
        // redirect to home page
    }

    if (!empty($movieId)) {

        // query movie id to get information
        $query = "SELECT * FROM movie where movie.movieId = $movieId";
        
        $response = @mysqli_query($dbc, $query);

        if ($response) {
            while($row = mysqli_fetch_array($response)) {
                $movieName = $row['name'];
                $movieSummary = $row['summary'];
                $produce_date = $row['produce_date'];
                $movieDirector = $row['director'];
                $duration = $row['duration'];
                $cover_image = $row['cover_image_path'];
                $background_image = $row['background_image_path'];
            }
        }

        // get movie categories
        $query = "SELECT category.category_name 
                  FROM movie_has_category 
                  INNER JOIN category ON movie_has_category.categoryId = category.categoryId 
                  WHERE movie_has_category.movieId = $movieId";

        $response = @mysqli_query($dbc, $query);

        if ($response) {
            $category = array();
            $i = 0;
            while($row = mysqli_fetch_array($response)) {
                $category[$i] = $row['category_name'];
                $i++;
            }
        }

        // get movie cast
        $query = "SELECT cast.fullName, cast.profil_image_path
                  FROM movie_has_cast 
                  INNER JOIN cast ON movie_has_cast.actorId = cast.actorId 
                  WHERE movie_has_cast.movieId = $movieId";

        $response = @mysqli_query($dbc, $query);

        if ($response) {

            $cast_name = array();
            $cast_image = array();
            $i = 0;
            while($row = mysqli_fetch_array($response)) {
                $cast_name[$i] = $row['fullName'];
                $cast_image[$i] = $row['profil_image_path'];
                $i++;
            }
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
    <link rel="stylesheet" type="text/css" href="resources/css/movie-style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="resources/js/script.js"></script>
    
    <style type="text/css">
        .subheader-movie {
            background: url(<?php echo $background_image ?>) 50% 50% no-repeat;
            background-size: cover;
        }
    </style>

    <title><?php echo $movieName ?> - DSFlix</title>
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

    <div class="subheader-movie">
        <div class="info-movie">
            <div class="row">
                <div class="col">
                    <h5 class="date"><?php echo $produce_date ?></h4>
                </div>
                <div class="col">
                    <h5 class="stars">9.1/10</h5>
                </div>
            </div>
            <h1 class="title"><?php echo $movieName ?></h1>
            <div class="row">
                <div class="col">
                    <h4 class="duration"><?php echo $duration ?></h4>
                </div>
                <div class="col">
                    <h4 class="category">
                    <?php
                        for ($i = 0; $i < count($category); $i++) {
                            echo $category[$i] . ($i+1 == count($category) ? '' : ', ');
                        }
                    ?>
                    </h4>
                </div>
                <div class="col">
                    <h4 class="type">In Theaters</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-list">
        <div class="container-movie">
            <div class="content">
                <div class="grid">
                    <div class="grid-col">
                        <img class="cover-movie" src="<?php echo $cover_image ?>" />
                    </div>
                    <div class="grid-col">
                        <div class="row">
                            <div class="col">
                                <div class="rating">
                                    <h3 class="rate">9.1</h3>
                                    <h3 class="grey">/10</h3>
                                </div>
                                <div class="rate-count">
                                    <h3>1,045</h3>
                                </div>
                            </div>
                            <div class="col">
                                <div class="rate-this">
                                    <h3>Rate This</h3>
                                    <div class="rate-stars">
                                        <a class="fa fa-star"></a>
                                        <a class="fa fa-star"></a>
                                        <a class="fa fa-star"></a>
                                        <a class="fa fa-star"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 class="summary"><?php echo $movieSummary ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 style="margin-bottom: 5px;">Director: </h3>
                            </div>
                            <div class="col">
                                <h3 class="creator"><?php echo $movieDirector ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 style="margin-top: 0;">Stars: </h3>
                            </div>
                            <div class="col">
                                <h3 class="cast-stars">
                                <?php
                                    for($i = 0; $i < 2; $i++) {
                                        echo $cast_name[$i] . ($i == 1 ? '' : ', ');
                                    }
                                ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cast">
                    <h2>Cast</h2>
                    <table class="cast-table">
                        <?php
                            for ($i = 0; $i < count($cast_name); $i++) {
                                echo 
                                '<tr class="odd">' . 
                                '<td class="primary_photo">' . 
                                '<img class="cast-photo" src="' . $cast_image[$i] . '" />' . 
                                '</td>' . 
                                '<td>' . 
                                '<h4>' . $cast_name[$i] . '</h4>' . 
                                '</td>' . 
                                '</tr>';
                            }
                        ?>
                    </table>
                </div>

                <div class="comment-section">
                    <h2>Comments</h2>
                    <div class="add-comment">
                        <textarea placeholder="Your Comment" rows="5" name="comment" form="commentform"></textarea> 
                    </div>
                    <div class="comment-list">
                        <div class="comment">
                            <div class="user-name">
                                <h4>nikos.skl</h4>
                            </div>
                            <div class="user-comment">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="user-name">
                                <h4>billE</h4>
                            </div>
                            <div class="user-comment">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="user-name">
                                <h4>some#234</h4>
                            </div>
                            <div class="user-comment">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>

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