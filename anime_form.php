<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tvinder</title>
        <link rel="stylesheet" href="add_form.css">
    </head>
    <body>
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
        <div class="the_form">
            <form action="anime_adder.php" method="post" enctype="multipart/form-data">
                Anime name: &nbsp<input type="text" name="name" placeholder="Ex: The legend of Snoopy...">
                <br><br>

                Release year: &nbsp<input type="text" name="year" placeholder="Ex: 2024">
                <br><br>

                Select image to upload: (please use the official poster from IMDB for a cleaner post)
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div>
    </body>
</html>