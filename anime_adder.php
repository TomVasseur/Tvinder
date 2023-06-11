<html>
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
    <span id="success">
      The anime was successfully added to Tvinder! <br>
      If you want to add another movie < <a href="anime_form.php">Click here</a> >
    </span>
  </body>
</html>
<?php
$film_name = $_POST["name"];
$film_release = $_POST["year"];
$target_dir = "poster/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    ;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$query = "INSERT INTO films (film_name, film_poster, film_release, film_type) VALUES (\"".$film_name."\",\"".$target_file."\",\"".$film_release."\", \"anime\");";
//connect to database
$user = "root";
$password = "";
$db = "tvinder";
$db = new mysqli('localhost', $user, $password, $db) or die("Unable to connect");
$db->query($query);
$db->close();
?>