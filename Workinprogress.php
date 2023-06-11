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
        SELECT * FROM films ORDER BY rand() LIMIT 5
    ) T1");
    $all_films = $all_films_query->fetch_assoc();
    ?>

    <header id="header">
        <div id="logo">Tvinder</div>
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
                        <a href="">Recommendation</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">TV Shows</p>
                    <div class="dropcontent">
                        <a href="show_ranking">Ranking</a>
                        <a href="show_new">NEW</a>
                        <a href="">Recommendation</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">Animes</p>
                    <div class="dropcontent">
                        <a href="anime_ranking.php">Ranking</a>
                        <a href="anime_new.php">NEW</a>
                        <a href="">Recommendation</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdwn">
                    <p class="dropbttn">Books</p>
                    <div class="dropcontent">
                        <a href="">Ranking</a>
                        <a href="">NEW</a>
                        <a href="">Recommendation</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    
    <br><br>
    <div class="workinprogress">
        THIS PART IS NOT READY YET PLEASE COME BACK LATER
    </div>
    <img src="wip.png" id="wip" alt="">
    <br><br>

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