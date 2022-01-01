<?php

class Movie
{
    private $name;
    private $country;
    private $year;
    private $director;

    public function __construct($name, $country, $year, $director)
    {
        $this->name = $name;
        $this->country = $country;
        $this->year = $year;
        $this->director = $director;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDirector()
    {
        return $this->director;
    }
}

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
