<?php

if ( file_exists("fav_movies.xml") ) {
    $fav_movies = fopen("fav_movies.xml", "r");
    $data = fread($fav_movies, filesize("fav_movies.xml"));
    fclose($fav_movies);

    $counter == 0;

    echo "<table>";

    $xml = simplexml_load_file("fav_movies.xml");
    foreach($xml->movie as $movie) {

        $counter++;

            echo"
                <th>
                <img src='$movie->picture' > <br />
                <h1>".$movie->title. "(".$movie->year.") </h1>
                <b>Director: </b>".$movie->director."<br />
                <b>Main Actor/Actress: </b>".$movie->main_actor."<br />
                <b>Genre: </b>".$movie->genre."<br />
                </th>
            ";

            if ($counter == 3) {
                echo "<tr>";
                $counter = 0;
            }

        }

        echo "</table>";

    } else { 
        echo "Error. File not found.";
    }

?>
