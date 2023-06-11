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
    $all_films_query = $db->query("SELECT * FROM films WHERE film_type=\"tvshow\" ORDER BY likes DESC");
    $all_films = $all_films_query->fetch_assoc();

    function like_it($id) {
        $db = new mysqli('localhost', "root", "", "tvinder") or die("Unable to connect");
        $res = $db->query("SELECT likes FROM films WHERE id=$id");
        $row = $res->fetch_assoc();
        $updated = $row["likes"]+1;
        $query = "UPDATE films SET likes = $updated WHERE id = $id;";
        $db->query($query);
        echo "<meta http-equiv='refresh' content='0'>";
    }
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
                        <a href="anime_show.php">NEW</a>
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
    
    <div class="film_article" style="margin-top:30px;">
        <?php $id1 = $all_films["id"];

        if(array_key_exists('button1', $_POST)) {
            like_it($id1);
        }
        ?>

        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>

        <div class=like_button>
        <form method="post">
        <input type="submit" name="button1" value="❤" />
        </form>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc();?>

    <div class="film_article">
        <?php $id2 = $all_films["id"];
        if(array_key_exists('button2', $_POST)) {
            like_it($id2);
        }
        ?>

        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>

        <div class=like_button>
            <form method="post">
            <input type="submit" name="button2" value="❤" />
            </form>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <?php $id3 = $all_films["id"];
        
        if(array_key_exists('button3', $_POST)) {
            like_it($id3);
        }
        ?>

        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>

        <div class=like_button>
        <form method="post">
        <input type="submit" name="button3" value="❤" />
        </form>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <?php $id4 = $all_films["id"];
        
        if(array_key_exists('button4', $_POST)) {
            like_it($id4);
        }
        ?>

        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>

        <div class=like_button>
        <form method="post">
        <input type="submit" name="button4" value="❤" />
        </form>
        </div>
    </div>

    <?php $all_films = $all_films_query->fetch_assoc(); ?>

    <div class="film_article">
        <?php $id5 = $all_films["id"];
        
        if(array_key_exists('button5', $_POST)) {
            like_it($id5);
        }
        ?>

        <img src=<?php echo $all_films["film_poster"]?> alt="">

        <div class="text_part">
            <p><?php echo $all_films["film_name"]?></p>
            <p>Release year: <?php echo $all_films["film_release"]?></p>
            <p>Likes: <?php echo $all_films["likes"]?></p>
        </div>

        <div class=like_button>
        <form method="post">
        <input type="submit" name="button5" value="❤" />
        </form>
        </div>
    </div>
    
    <!-- this line was once useful to test some features so I let it live here because I ❤
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