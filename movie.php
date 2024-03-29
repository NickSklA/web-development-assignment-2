<?php
    session_start(); 

    $loggedin = "false";
    if (!isset($_SESSION['username'])) {
        $loggedin = "false";
        session_destroy();
    }
    else {
        $loggedin = "true";
    }

    require_once('mysqli_connect.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $movieId = $_GET['id'];  
    }
    else {
        // redirect to home page
        header('Location: index.php');
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

        // get movie rate
        $query = "SELECT * FROM rating where movieId = $movieId";

        $response = @mysqli_query($dbc, $query);

        if ($response) {
            $rate = 0;
            $count = 0;
            while($row = mysqli_fetch_array($response)) {
                $rate += $row['rate'];
                $count++;
            }
            if ($count != 0) {
                $rate = $rate / $count;
                $rate = round($rate, 1);
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

    <div class="subheader-movie">
        <div class="info-movie">
            <div class="row">
                <div class="col">
                    <h5 class="date"><?php echo $produce_date ?></h4>
                </div>
                <div class="col">
                    <h5 class="stars"><?php echo $rate ?>/8</h5>
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
                                    <h3 class="rate"><?php echo $rate ?></h3>
                                    <h3 class="grey">/8</h3>
                                </div>
                                <div class="rate-count">
                                    <h3><?php echo $count ?></h3>
                                </div>
                            </div>
                            <div class="col rate-this">
                            <?php
                                if ($loggedin == 'false') { 
                                    $userRate = false; ?>
                                    <div>
                                        <h3>Login to rate this</h3>
                                    </div>
                            <?php 
                                } else if ($loggedin == 'true') {
                                    require_once('mysqli_connect.php');

                                    // check for user's rate
                                    $query = "SELECT * FROM rating WHERE userId=" . "'" . $_SESSION['userId'] . "' AND " . "movieId='$movieId'";
                                    
                                    $results = mysqli_query($dbc, $query);
                                    $userRate = mysqli_fetch_assoc($results);
                                    
                                    if (!$userRate) { ?> 
                                        <div>
                                            <h3>Rate This</h3>
                                        </div>
                                <?php
                                    } else  { 
                                        $userRateStars = $userRate['rate']; ?>
                                        <div>
                                            <h3>Your Rate</h3>
                                        </div>
                                <?php } ?>
                            <?php } ?>
                            <?php
                                if (!$userRate) { ?>
                                    <div class="rate-stars">
                                        <form id="rating-form" method="POST" action="server.php">
                                            <input type="hidden" name="movieId" value="<?php echo $movieId ?>" />
                                            <input type="hidden" name="userId" value="<?php if (isset($_SESSION['userId'])) echo $_SESSION['userId']; ?>" />
                                            <input type="hidden" name="submit_rate" value="submit" />
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star8" name="rate" value="8" />
                                            <label for="star8" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star7" name="rate" value="7" />
                                            <label for="star7" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star6" name="rate" value="6" />
                                            <label for="star6" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="Rate"></label></span>
                                            <span <?php echo 'onclick="onStarClick(this, ' . "'" . $loggedin . "'" . ')"' ?> class="span-star"><input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="Rate"></label></span>
                                        </form>
                                    </div>
                            <?php 
                                } else { ?>
                                    <div class="rating-stars">
                                        <?php
                                            for ($i = 8; $i > 0; $i--) {
                                                if ($userRateStars == $i) {
                                                    echo
                                                    '<span class="span-star checked"><input type="radio" />
                                                    <label title="Rate"></label></span>';
                                                }
                                                else {
                                                    echo
                                                    '<span class="span-star"><input type="radio" />
                                                    <label title="Rate"></label></span>';
                                                }
                                            }
                                        ?>
                                    </div>
                            <?php } ?>
                                
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
                    
                    <?php
                        if ($loggedin == 'false') { ?>
                            <div class="add-comment">
                                <input type="hidden" name="movieId" value="<?php echo $movieId ?>" />
                                <textarea class="comment-field" rows="5" name="comment"
                                          placeholder="Login to comment this movie" disabled></textarea>
                            </div>
                    <?php 
                        } else if ($loggedin == 'true') {
                            require_once('mysqli_connect.php');

                            // check for user's comment
                            $query = "SELECT * FROM comment WHERE userId=" . "'" . $_SESSION['userId'] . "' AND " . "movieId='$movieId'";
                            
                            $results = mysqli_query($dbc, $query);
                            $userComment = mysqli_fetch_assoc($results);

                            if (!$userComment) { ?> 
                                <div class="add-comment">
                                    <form method="POST" action="server.php">
                                        <input type="hidden" name="movieId" value="<?php echo $movieId ?>" />
                                        <textarea class="comment-field" rows="5" name="comment"
                                                  placeholder="Your Comment"></textarea>
                                        <button class="primary-btn comment-btn" type="submit" name="submit_comment">Submit Comment</button>
                                    </form>
                                </div>
                        <?php
                            } ?>
                    <?php } ?>

                    <div class="comment-list">
                    <?php
                        require_once('mysqli_connect.php');

                        $query = "SELECT * FROM comment WHERE movieId='$movieId'";

                        $response = @mysqli_query($dbc, $query);

                        if ($response) {
                            while($row = mysqli_fetch_array($response)) {

                                // get username 
                                $query = "SELECT * FROM users WHERE userId=" . "'" . $row['userId'] . "'"; 
                                $results = mysqli_query($dbc, $query);
                                $user = mysqli_fetch_assoc($results);

                                echo
                                '<div class="comment">
                                    <div class="user-name">
                                        <h4>' . $user['username'] . '</h4>
                                    </div>  
                                    <div class="user-comment">
                                        <p>' . $row['comment'] . '</p>
                                    </div>  
                                </div>';
                            }
                        }
                    ?>
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