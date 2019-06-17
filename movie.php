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

    <title>Movie Page</title>
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
                    <h5 class="date">11 Jul 2016</h4>
                </div>
                <div class="col">
                    <h5 class="stars">9.1/10</h5>
                </div>
            </div>
            <h1 class="title">Inception</h1>
            <div class="row">
                <div class="col">
                    <h4 class="duration">2h 28min</h4>
                </div>
                <div class="col">
                    <h4 class="category">Drama, Horror, Action</h4>
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
                        <img class="cover-movie" src="resources/images/movie1.jpg" />
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
                                <h3 class="summary">
                                A thief who steals corporate secrets through the use 
                                of dream-sharing technology is given the inverse task 
                                of planting an idea into the mind of a C.E.O.
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 style="margin-bottom: 5px;">Creator: </h3>
                            </div>
                            <div class="col">
                                <h3 class="creator">Christopher Nolan</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 style="margin-top: 0;">Stars: </h3>
                            </div>
                            <div class="col">
                                <h3 class="cast-stars">Leonardo DiCaprio, Joseph Gordon-Levitt</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cast">
                    <h2>Cast</h2>
                    <table class="cast-table">
                        <tr class="odd">
                            <td class="primary_photo">
                                <img class="cast-photo" src="resources/images/cast1.jpg" />
                            </td>
                            <td>
                                <h4>Leonardo DiCaprio</h4>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="primary_photo">
                                <img class="cast-photo" src="resources/images/cast2.jpg" />
                            </td>
                            <td>
                                <h4>Joseph Gordon-Levitt</h4>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="primary_photo">
                                <img class="cast-photo" src="resources/images/cast3.jpg" />
                            </td>
                            <td>
                                <h4>Ellen Page</h4>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="primary_photo">
                                <img class="cast-photo" src="resources/images/cast4.jpg" />
                            </td>
                            <td>
                                <h4>Tom Hardy</h4>
                            </td>
                        </tr>
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