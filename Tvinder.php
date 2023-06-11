<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVinder</title>
    <link rel="stylesheet" href="Tvinder.css">
</head>
<body>
    <?php
    //connect to database
    $user = "root";
    $password = "";
    $db = "tvinder";
    $db = new mysqli('localhost', $user, $password, $db) or die("Unable to connect");

    //fetch max id for films
    $query = "SELECT MAX(id) AS max
    FROM films";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $film_max_id = $row["max"];

    //fetch all the films
    $all_films_query = $db->query("SELECT * FROM 
    (
        SELECT * FROM films ORDER BY rand()
    ) T1");
    $all_films = $all_films_query->fetch_assoc();
    ?>

    <header id="header">
        <div id="tvind">Tvinder</div>
    </header>
    <nav>
        <ul>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn"><a href="Tvinder.php" style="text-decoration: none; color: black">Home</a></p> 
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">Films</p>
                    <div class="dropcontent">
                        <a href="film_ranking.php">Ranking</a>
                        <a href="film_new.php">NEW</a>
                        <a href="Workinprogress.php">Recommendation</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">TV Shows</p>
                    <div class="dropcontent">
                        <a href="show_ranking.php">Ranking</a>
                        <a href="show_new.php">NEW</a>
                        <a href="Workinprogress.php">Recommendation</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">Animes</p>
                    <div class="dropcontent">
                        <a href="anime_ranking.php">Ranking</a>
                        <a href="anime_new.php">NEW</a>
                        <a href="Workinprogress.php">Recommendation</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">Books</p>
                    <div class="dropcontent">
                        <a href="Workinprogress.php">Ranking</a>
                        <a href="Workinprogress.php">NEW</a>
                        <a href="Workinprogress.php">Recommendation</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <div id="welcome" onclick="barretoi()">
        <p style="margin: 9px; margin-bottom: 3px;">Welcome to Tvinder!<br>
        Tvinder is THE website you need to find the newest stuff to watch.<br>
        You can also find what the other users liked the most and help this community to rank new movies by liking them!<br>
        Feel free to send us any suggestion about the kind of features you would like to see here.<br>
        There is always new content and new movies to come on Tvinder so check us frequently!<br></p>
        <p style="margin: 0; padding: 0; font-size: x-small; color: grey;">click to remove</p>
    </div>

    <script>
        var cadegage = document.getElementById("welcome");
        function barretoi() {
            cadegage.remove();
        }
    </script>

    <div class="film_article" style="margin-top:30px;">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc();?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>
    
    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>
    </div>

    <!-- this line was once useful to test some features so I let it live here because I like it
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    -->

    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("header");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>
    <footer>
        <div>
            <p>If you have any inquiries feel free to contact me on this email adress: <address>tom.vasseur@epita.fr</address></p>
        </div>
    </footer>
</body>
</html>