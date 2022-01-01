<?php
function createMovieCards($movies)
{
    foreach ($movies as $movie) {
        $name = $movie->getName();
        $country = $movie->getCountry();
        $year = $movie->getYear();
        $director = $movie->getDirector();

        echo '
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">' . $name . '</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">' . $country . '</li>
                <li class="list-group-item">' . $year . '</li>
                <li class="list-group-item">' . $director . '</li>
            </ul>
            </div>
        ';
    }
}
